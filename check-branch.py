import os
import subprocess

def get_current_branch(repo_path):
    """获取当前子模块的分支"""
    result = subprocess.run(['git', '-C', repo_path, 'rev-parse', '--abbrev-ref', 'HEAD'], capture_output=True, text=True)
    return result.stdout.strip()

def get_gitmodules_branch(repo_path, submodule_path):
    """获取.gitmodules中定义的子模块分支"""
    gitmodules_path = os.path.join(repo_path, '.gitmodules')
    with open(gitmodules_path, 'r') as file:
        lines = file.readlines()
    
    submodule_name = os.path.relpath(submodule_path, repo_path).replace('\\', '/')
    branch = None
    for i, line in enumerate(lines):
        if f'path = {submodule_name}' in line:
            for j in range(i, len(lines)):
                if 'branch =' in lines[j]:
                    branch = lines[j].split('=')[1].strip()
                    break
            break
    return branch

def check_submodules(repo_path):
    """检查子模块的分支并与.gitmodules中的分支进行比较"""
    result = subprocess.run(['git', 'submodule', 'status', '--recursive'], capture_output=True, text=True)
    submodules = [line.split()[1] for line in result.stdout.strip().split('\n')]

    mismatched_submodules = []
    for submodule in submodules:
        submodule_path = os.path.join(repo_path, submodule)
        current_branch = get_current_branch(submodule_path)
        gitmodules_branch = get_gitmodules_branch(repo_path, submodule_path)
        
        if current_branch != gitmodules_branch:
            mismatched_submodules.append((submodule, current_branch, gitmodules_branch))
    
    return mismatched_submodules

def main():
    repo_path = os.getcwd()  # 假设当前目录是仓库的根目录
    mismatched_submodules = check_submodules(repo_path)
    
    if mismatched_submodules:
        print("以下子模块的分支与.gitmodules中的分支不匹配：")
        for submodule, current_branch, gitmodules_branch in mismatched_submodules:
            print(f"子模块: {submodule}, 当前分支: {current_branch}, .gitmodules中的分支: {gitmodules_branch}")
    else:
        print("所有子模块的分支都匹配。")

if __name__ == "__main__":
    main()