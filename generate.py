import os
import time

# 检测当前目录是否存在.gitmodules文件
if os.path.exists('.gitmodules'):
    print("发现.gitmodules文件")
else:
    print("未找到.gitmodules文件")
    exit()

# 读取.gitmodules文件内容
with open('.gitmodules', 'r') as file:
    content = file.read()

# 分割每个子模块的信息
modules = content.split('[submodule')

# 打开add-modules.bat文件用于写入命令
with open('add-modules.bat', 'w') as file:
    # 遍历每个子模块
    for module in modules[1:]:  # 跳过第一个空元素
        print(f"正在处理模块: {module.strip()}")
        
        # 提取模块的路径、URL和分支信息
        path = None
        url = None
        branch = None
        for line in module.split('\n'):
            line = line.strip()  # 去除行首尾的空格
            if line.lower().startswith('path'):
                path = line.split('=')[1].strip()
            elif line.lower().startswith('url'):
                url = line.split('=')[1].strip()
            elif line.lower().startswith('branch'):
                branch = line.split('=')[1].strip()
        
        # 生成子模块添加命令
        # 添加 User-Agent (使用仓库特定标识 + Qiuwen/1.1)
        ua = 'YsArchives-Extensions/1.0 (TopRealm; https://github.com/TopRealm/YsArchives-Extensions) Qiuwen/1.1'
        command = f'git -c "http.userAgent={ua}" submodule add'
        if branch:
            command += f' -b {branch}'
        command += f' {url} {path}'
        
        print(f"生成的命令: {command}")
        
        # 将命令写入add-modules.bat文件
        file.write(command + '\n')
        file.write('timeout /t 1 /nobreak > NUL\n')  # 添加3秒延迟
        
        print("模块命令生成成功")
        time.sleep(3)  # 间隔3秒防止控制台拥堵

print("任务完成")