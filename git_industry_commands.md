)git configuration commands
    1.1)command:git config --global user.name
        syntax:git config --global user.name "name"
        purpose:used to set the author name for all your Git commits on your system.
        example:git config --global user.name "Sameera"
        screenshot:
    1.2)command:git config --global user.email
        syntax:git config --global user.name "email"
        purpose:used to set the author email for all your Git commits on your system.
        example:git config --global user.name "Sarawat95@gmail.com"
        screenshot:
    1.3)command: git config --list
       syntax:git config --list
       purpose:Used to display all Git configuration settings currently applied on the system, including username, email, editor, and other configuration values.
       example:git config --list
       screenshot:
    1.4)command: git config --unset
       syntax:git config --global --unset user.name
       or git config --global --unset user.email
       purpose:Used to remove or delete a specific Git configuration value from the system configuration.
       example:git config --global --unset "sarawat59@gmail.com"
       screenshot:
Repository Setup Commands
1) command: git init
2) syntax: git init
3) purpose: Used to initialize a new Git repository in the current directory. It creates a hidden .git folder that allows Git to start tracking files and versions of the project.
4) example: git init
5) screenshot:

1.2)
1) command: git clone
2) syntax: git clone "repository_url"
3) purpose: Used to create a copy of an existing remote Git repository on your local machine so you can work on the project locally.
4) example: git clone https://github.com/user/project.git
5) screenshot:

1.3)
1) command: git clone --branch
2) syntax: git clone --branch "branch_name" "repository_url"
3) purpose: Used to clone a specific branch from a remote repository instead of cloning the entire repository with the default branch.
4) example: git clone --branch develop https://github.com/user/project.git
5) screenshot:

1.4)
1) command: git clone --depth
2) syntax: git clone --depth 1 "repository_url"
3) purpose: Used to perform a shallow clone of the repository by downloading only the most recent commit history, which makes the cloning process faster and reduces the amount of data downloaded.
4) example: git clone --depth 1 https://github.com/user/project.git
5) screenshot:

3. Repository Status & Inspection
1.5)
1) command: git status
2) syntax: git status
3) purpose: Used to display the current state of the working directory and staging area. It shows which files are modified, staged, or untracked.
4) example: git status
5) screenshot:

1.6)
1) command: git log
2) syntax: git log
3) purpose: Used to display the commit history of the repository including commit id, author, date, and commit message.
4) example: git log
5) screenshot:

1.7)
1) command: git log --oneline
2) syntax: git log --oneline
3) purpose: Used to show a compact version of the commit history where each commit is displayed in a single line with its short commit id and message.
4) example: git log --oneline
5) screenshot:

1.8)
1) command: git log --graph
2) syntax: git log --graph
3) purpose: Used to display the commit history in a graphical tree format showing branch and merge structure.
4) example: git log --graph
5) screenshot:

1.9)
1) command: git show
2) syntax: git show <commit_id>
3) purpose: Used to display detailed information about a specific commit including changes made, author details, and commit message.
4) example: git show a1b2c3d
5) screenshot:

1.10)
1) command: git diff
2) syntax: git diff
3) purpose: Used to show the differences between the working directory and the last committed version of files.
4) example: git diff
5) screenshot:

1.11)
1) command: git diff --staged
2) syntax: git diff --staged
3) purpose: Used to show the differences between the staged files and the last commit.
4) example: git diff --staged
5) screenshot:

1.12)
1) command: git blame
2) syntax: git blame <file_name>
3) purpose: Used to display which author last modified each line of a file along with the commit id and timestamp.
4) example: git blame index.html
5) screenshot:

1.13)
1) command: git reflog
2) syntax: git reflog
3) purpose: Used to show a log of all changes made to the HEAD including commits, resets, checkouts, and branch switches.
4) example: git reflog
5) screenshot:

1.14)
1) command: git shortlog
2) syntax: git shortlog
3) purpose: Used to summarize commit history by grouping commits based on author names.
4) example: git shortlog
5) screenshot:

4. File Tracking Commands
1.15)
1) command: git add
2) syntax: git add <file_name>
3) purpose: Used to add a specific file from the working directory to the staging area so it can be included in the next commit.
4) example: git add index.html
5) screenshot:

1.16)
1) command: git add .
2) syntax: git add .
3) purpose: Used to add all modified and new files in the current directory to the staging area at once.
4) example: git add .
5) screenshot:

1.17)
1) command: git add -p
2) syntax: git add -p
3) purpose: Used to interactively stage portions of changes in files. It allows developers to review and choose specific parts (patches) of changes to add to the staging area.
4) example: git add -p
5) screenshot:

1.18)
1) command: git restore
2) syntax: git restore <file_name>
3) purpose: Used to discard changes in the working directory and restore the file to the last committed state.
4) example: git restore index.html
5) screenshot:

1.19)
1) command: git restore --staged
2) syntax: git restore --staged <file_name>
3) purpose: Used to unstage a file that was previously added to the staging area without deleting the changes from the working directory.
4) example: git restore --staged index.html
5) screenshot:

1.20)
1) command: git rm
2) syntax: git rm <file_name>
3) purpose: Used to remove a file from the working directory and staging area so that it will be deleted from the repository in the next commit.
4) example: git rm file.txt
5) screenshot:

1.21)
1) command: git mv
2) syntax: git mv <old_file_name> <new_file_name>
3) purpose: Used to rename or move a file within the repository while tracking the change in Git history.
4) example: git mv oldname.txt newname.txt
5) screenshot:

5. Commit Commands
1.22)
1) command: git commit
2) syntax: git commit
3) purpose: Used to record the staged changes into the repository history. It opens the default editor to write a commit message describing the changes.
4) example: git commit
5) screenshot:

1.23)
1) command: git commit -m
2) syntax: git commit -m "commit_message"
3) purpose: Used to commit staged changes with a message directly from the command line without opening the text editor.
4) example: git commit -m "Added login page"
5) screenshot:

1.24)
1) command: git commit --amend
2) syntax: git commit --amend
3) purpose: Used to modify the most recent commit. It allows you to change the commit message or add additional staged changes to the last commit.
4) example: git commit --amend
5) screenshot:

1.25)
1) command: git commit --no-edit
2) syntax: git commit --amend --no-edit
3) purpose: Used to amend the previous commit while keeping the existing commit message unchanged.
4) example: git commit --amend --no-edit
5) screenshot:


6. Branch Management Commands
1.26)
1) command: git branch
2) syntax: git branch
3) purpose: Used to list all local branches in the repository and indicate the currently active branch.
4) example: git branch
5) screenshot:

1.27)
1) command: git branch -a
2) syntax: git branch -a
3) purpose: Used to display all branches in the repository including both local branches and remote branches.
4) example: git branch -a
5) screenshot:

1.28)
1) command: git branch -d
2) syntax: git branch -d <branch_name>
3) purpose: Used to delete a local branch that has already been merged into the current branch.
4) example: git branch -d feature
5) screenshot:

1.29)
1) command: git branch -D
2) syntax: git branch -D <branch_name>
3) purpose: Used to force delete a local branch even if it has not been merged.
4) example: git branch -D feature
5) screenshot:

1.30)
1) command: git checkout
2) syntax: git checkout <branch_name>
3) purpose: Used to switch from the current branch to another existing branch.
4) example: git checkout develop
5) screenshot:

1.31)
1) command: git checkout -b
2) syntax: git checkout -b <branch_name>
3) purpose: Used to create a new branch and immediately switch to it.
4) example: git checkout -b feature
5) screenshot:

1.32)
1) command: git switch
2) syntax: git switch <branch_name>
3) purpose: Used to switch between branches in a repository in a simpler and more modern way compared to checkout.
4) example: git switch develop
5) screenshot:

1.33)
1) command: git switch -c
2) syntax: git switch -c <branch_name>
3) purpose: Used to create a new branch and switch to it in a single command.
4) example: git switch -c feature
5) screenshot:

7. Merge & Integration Commands
1.34)
1) command: git merge
2) syntax: git merge <branch_name>
3) purpose: Used to combine the changes from one branch into the current branch. It integrates the history of the specified branch with the branch you are currently working on.
4) example: git merge develop
5) screenshot:

1.35)
1) command: git merge --no-ff
2) syntax: git merge --no-ff <branch_name>
3) purpose: Used to merge a branch while forcing Git to create a merge commit even if a fast-forward merge is possible. This helps preserve the branch history.
4) example: git merge --no-ff feature
5) screenshot:

8. Remote Repository Commands
1.36)
1) command: git remote
2) syntax: git remote
3) purpose: Used to display the names of remote repositories connected to the local repository.
4) example: git remote
5) screenshot:

1.37)
1) command: git remote -v
2) syntax: git remote -v
3) purpose: Used to show remote repository names along with their corresponding URLs for fetch and push operations.
4) example: git remote -v
5) screenshot:

1.38)
1) command: git remote add
2) syntax: git remote add <name> <repository_url>
3) purpose: Used to connect a local repository to a remote repository by adding its URL.
4) example: git remote add origin https://github.com/user/project.git
5) screenshot:

1.39)
1) command: git remote remove
2) syntax: git remote remove <name>
3) purpose: Used to remove a remote repository connection from the local repository.
4) example: git remote remove origin
5) screenshot:

1.40)
1) command: git fetch
2) syntax: git fetch
3) purpose: Used to download commits, branches, and updates from a remote repository without merging them into the current branch.
4) example: git fetch
5) screenshot:

1.41)
1) command: git fetch --all
2) syntax: git fetch --all
3) purpose: Used to fetch updates from all configured remote repositories in the project.
4) example: git fetch --all
5) screenshot:

1.42)
1) command: git pull
2) syntax: git pull
3) purpose: Used to fetch changes from the remote repository and automatically merge them into the current branch.
4) example: git pull
5) screenshot:

1.43)
1) command: git pull --rebase
2) syntax: git pull --rebase
3) purpose: Used to fetch changes from the remote repository and reapply local commits on top of the updated branch to maintain a cleaner history.
4) example: git pull --rebase
5) screenshot:

1.44)
1) command: git push
2) syntax: git push
3) purpose: Used to upload local commits from the current branch to the connected remote repository.
4) example: git push
5) screenshot:

1.45)
1) command: git push -u origin branch-name
2) syntax: git push -u origin <branch_name>
3) purpose: Used to push a branch to the remote repository and set it as the upstream branch for future push and pull commands.
4) example: git push -u origin develop
5) screenshot:

1.46)
1) command: git push --force
2) syntax: git push --force
3) purpose: Used to forcefully update the remote repository with local commits, overwriting the remote history if necessary.
4) example: git push --force
5) screenshot:

9)stash commands
1.47)
1) command: git stash
2) syntax: git stash
3) purpose: Used to temporarily save changes in the working directory without committing them, allowing you to work on something else and come back later.
4) example: git stash
5) screenshot:

1.48)
1) command: git stash list
2) syntax: git stash list
3) purpose: Used to display all the stashed changes saved in the repository.
4) example: git stash list
5) screenshot:

1.49)
1) command: git stash pop
2) syntax: git stash pop
3) purpose: Used to apply the most recent stash to the working directory and remove it from the stash list.
4) example: git stash pop
5) screenshot:

1.50)
1) command: git stash apply
2) syntax: git stash apply
3) purpose: Used to apply the most recent stash to the working directory without removing it from the stash list.
4) example: git stash apply
5) screenshot:

1.51)
1) command: git stash drop
2) syntax: git stash drop stash@{n}
3) purpose: Used to delete a specific stash from the stash list.
4) example: git stash drop stash@{0}
5) screenshot:

1.52)
1) command: git stash clear
2) syntax: git stash clear
3) purpose: Used to remove all stashed changes from the stash list permanently.
4) example: git stash clear
5) screenshot:

10)reset and undo
1.53)
1) command: git reset
2) syntax: git reset <commit_id>
3) purpose: Used to move the current branch pointer (HEAD) to a specified commit. It is commonly used to undo commits or unstage changes.
4) example: git reset HEAD~1
5) screenshot:

1.54)
1) command: git reset --soft
2) syntax: git reset --soft <commit_id>
3) purpose: Used to reset the HEAD to a specific commit while keeping all changes staged in the staging area.
4) example: git reset --soft HEAD~1
5) screenshot:

1.55)
1) command: git reset --mixed
2) syntax: git reset --mixed <commit_id>
3) purpose: Used to reset the HEAD and unstage the changes while keeping them in the working directory.
4) example: git reset --mixed HEAD~1
5) screenshot:

1.56)
1) command: git reset --hard
2) syntax: git reset --hard <commit_id>
3) purpose: Used to reset the HEAD and completely discard all staged and working directory changes.
4) example: git reset --hard HEAD~1
5) screenshot:

1.57)
1) command: git revert
2) syntax: git revert <commit_id>
3) purpose: Used to undo a commit by creating a new commit that reverses the changes made in the specified commit.
4) example: git revert a1b2c3d
5) screenshot:

1.58)
1) command: git clean -f
2) syntax: git clean -f
3) purpose: Used to remove untracked files from the working directory.
4) example: git clean -f
5) screenshot:

1.59)
1) command: git clean -fd
2) syntax: git clean -fd
3) purpose: Used to remove untracked files and directories from the working directory.
4) example: git clean -fd
5) screenshot:

11)rebasing commands
1.60)
1) command: git rebase
2) syntax: git rebase <branch_name>
3) purpose: Used to reapply commits from the current branch onto another base branch, creating a cleaner linear history.
4) example: git rebase main
5) screenshot:

1.61)
1) command: git rebase -i
2) syntax: git rebase -i <commit_id>
3) purpose: Used to perform an interactive rebase where commits can be edited, reordered, combined, or removed.
4) example: git rebase -i HEAD~3
5) screenshot:

1.62)
1) command: git rebase --continue
2) syntax: git rebase --continue
3) purpose: Used to continue the rebasing process after resolving conflicts.
4) example: git rebase --continue
5) screenshot:

1.63)
1) command: git rebase --abort
2) syntax: git rebase --abort
3) purpose: Used to cancel the ongoing rebase operation and return the repository to its previous state.
4) example: git rebase --abort
5) screenshot:

1.64)
1) command: git cherry-pick
2) syntax: git cherry-pick <commit_id>
3) purpose: Used to apply a specific commit from one branch onto the current branch.
4) example: git cherry-pick a1b2c3d
5) screenshot:

1.65)
1) command: git format-patch
2) syntax: git format-patch <commit_id>
3) purpose: Used to create patch files from commits that can be shared or applied to another repository.
4) example: git format-patch HEAD~2
5) screenshot:

1.66)
1) command: git apply
2) syntax: git apply <patch_file>
3) purpose: Used to apply changes from a patch file to the working directory.
4) example: git apply update.patch
5) screenshot:

1.67)
1) command: git am
2) syntax: git am <patch_file>
3) purpose: Used to apply patches created by git format-patch while preserving commit information.
4) example: git am 0001-update.patch
5) screenshot:

1.68)
1) command: git tag
2) syntax: git tag
3) purpose: Used to list all tags in the repository.
4) example: git tag
5) screenshot:

1.69)
1) command: git tag -a
2) syntax: git tag -a <tag_name> -m "message"
3) purpose: Used to create an annotated tag with additional information such as message, author, and date.
4) example: git tag -a v1.0 -m "First release"
5) screenshot:

1.70)
1) command: git tag -d
2) syntax: git tag -d <tag_name>
3) purpose: Used to delete a tag from the local repository.
4) example: git tag -d v1.0
5) screenshot:

1.71)
1) command: git push origin --tags
2) syntax: git push origin --tags
3) purpose: Used to push all local tags to the remote repository.
4) example: git push origin --tags
5) screenshot:

1.72)
1) command: git submodule add
2) syntax: git submodule add <repository_url>
3) purpose: Used to add another Git repository as a submodule inside the current repository.
4) example: git submodule add https://github.com/user/library.git
5) screenshot:

1.73)
1) command: git submodule init
2) syntax: git submodule init
3) purpose: Used to initialize submodules in the repository after cloning.
4) example: git submodule init
5) screenshot:

1.74)
1) command: git submodule update
2) syntax: git submodule update
3) purpose: Used to fetch and update the submodule repositories to the committed version.
4) example: git submodule update
5) screenshot:

1.75)
1) command: git bisect
2) syntax: git bisect
3) purpose: Used to perform a binary search through commit history to find the commit that introduced a bug.
4) example: git bisect
5) screenshot:

1.76)
1) command: git bisect start
2) syntax: git bisect start
3) purpose: Used to start the bisect process to identify the faulty commit.
4) example: git bisect start
5) screenshot:

1.77)
1) command: git bisect good
2) syntax: git bisect good <commit_id>
3) purpose: Used to mark a commit as good during the bisect process.
4) example: git bisect good a1b2c3d
5) screenshot:

1.78)
1) command: git bisect bad
2) syntax: git bisect bad <commit_id>
3) purpose: Used to mark a commit as bad during the bisect process.
4) example: git bisect bad d4e5f6g
5) screenshot: