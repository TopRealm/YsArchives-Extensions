@echo off
setlocal enabledelayedexpansion

set successModules=
set failedModules=

echo Updating all submodules...

REM Navigate to the main repository
cd /d %~dp0

REM Initialize and update submodules to ensure they exist locally
git submodule update --init

REM Check each submodule
for /f "tokens=2" %%i in ('git submodule') do (
    pushd %%i
    echo.
    echo Checking submodule in %%i...

    REM Fetch updates
    git fetch origin

    REM Try to checkout the specific branch
    git checkout REL1_43 2>nul
    if errorlevel 1 (
        echo Branch 'REL1_43' does not exist in submodule %%i. Skipping...
        set failedModules=!failedModules! %%i
    ) else (
        echo Switched to branch 'REL1_43' in submodule %%i.
        git pull
        set successModules=!successModules! %%i
    )

    REM Return to the main repository directory
    popd
)

REM Check if .gitmodules has been changed
git status | findstr ".gitmodules"
if errorlevel 1 (
    echo .gitmodules is unchanged.
) else (
    echo .gitmodules has changed, committing changes...
    git add .gitmodules
    git commit -m "Updated .gitmodules file after submodule branch changes."
)

echo.
echo Update process completed.

echo.
echo Summary:
echo Successful modules: !successModules!
echo Failed modules: !failedModules!

endlocal