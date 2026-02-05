import subprocess
import time
import sys
import os

# 默认延迟时间（秒）
DEFAULT_DELAY = 1

def get_submodules():
    """获取所有子模块的路径列表"""
    submodules = []
    try:
        # 使用 git submodule status 获取列表
        # 输出格式: [-+]<commit> <path> <describe>
        output = subprocess.check_output(["git", "submodule", "status"], text=True)
        for line in output.splitlines():
            parts = line.strip().split()
            if len(parts) >= 2:
                submodules.append(parts[1])
    except subprocess.CalledProcessError as e:
        print(f"Error getting submodule list: {e}")
        sys.exit(1)
    return submodules

def update_submodules(delay):
    submodules = get_submodules()
    total = len(submodules)
    
    print(f"Found {total} submodules. Starting update with {delay}s delay between requests.")
    print("-" * 50)

    success_count = 0
    fail_count = 0
    failed_modules = []

    for i, path in enumerate(submodules, 1):
        print(f"[{i}/{total}] Updating {path}...")
        
        try:
            # 执行 git submodule update --remote <path>
            # 这里添加了 --init 以防模块未初始化
            # 如果不需要初始化，可以去掉 --init
            # 添加 User-Agent (使用仓库特定标识 + Qiuwen/1.1)
            ua = "YsArchives-Extensions/1.0 (TopRealm; https://github.com/TopRealm/YsArchives-Extensions) Qiuwen/1.1"
            cmd = ["git", "-c", f"http.userAgent={ua}", "submodule", "update", "--init", "--remote", path]
            subprocess.check_call(cmd)
            print(f"Successfully updated {path}")
            success_count += 1
        except subprocess.CalledProcessError:
            print(f"Failed to update {path}")
            fail_count += 1
            failed_modules.append(path)
        
        # 如果不是最后一个，则等待
        if i < total:
            print(f"Waiting {delay} seconds to avoid rate limiting...")
            time.sleep(delay)
        
        print("-" * 50)

    print("\nUpdate process completed.")
    print(f"Success: {success_count}")
    print(f"Failed: {fail_count}")
    
    if failed_modules:
        print("Failed modules:")
        for m in failed_modules:
            print(f" - {m}")

if __name__ == "__main__":
    delay = DEFAULT_DELAY
    
    # 允许通过命令行参数指定延迟时间
    # 用法: python slow_update.py [delay_in_seconds]
    if len(sys.argv) > 1:
        try:
            delay = float(sys.argv[1])
        except ValueError:
            print(f"Invalid delay value provided. Using default: {delay}s")
    
    try:
        update_submodules(delay)
    except KeyboardInterrupt:
        print("\nOperation cancelled by user.")
        sys.exit(1)
