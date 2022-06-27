# GIT Profile

## What is GIT?

    -> Free and open source version control tool.
    -> Git is a Distributed Version Control tool that supports distributed non-linear workflows by providing data assurance for developing quality software.

## What is version control system?

    -> The management of changes to documents,computer programs, large web sites and others collections of information.
    We track our code changes in GIT.

## There are two type of VCS?

    -> Centralized version control system [ Remote Repository ]
        SVN
    -> Distributed version control system [ Local Repository ]
        GITHUB / GITLAB

## Why we can use VCS?

    -> It helps you to analyze the code or program in such a way that 
        --> VCS provides you with proper description
        --> What exactly was changed 
        --> When it was changed
        And hence, you can analyze how your project evolved between versions. 

## Different types of Vcs tools.

    -> GIT
    -> SVN : Subversion control system
    -> CVS
    -> mercurial

## Features of GIT:

    -> Distributed
    -> Compatible
    -> Non-linear
    -> Branching
    -> Lightweight
    -> Speed
    -> Open source
    -> Reliable
    -> Secure

## What is Repository?

    -> A directory or storage space where your project can live. it can be local to a folder on your computer, or it can be a storage space on GITHUB or another online host. You can keep code files, text files, image files, you name it, inside a repo.

    Two types:
        Central/Remote Repo
        Local Repo

## TERMS:-

    Directory -> Folder
    Terminal or command line -> interface of text commands
    CLI -> command line interface
    cd -> change Directory
    Repository -> project
    Github -> A website to host your Repository online

## Git commands:-

    git clone                       -> Bring a repository, that is hosted somewhere like github into a folder 
                                        on your local machine
    git status                      -> check your status of ypur changes
    git restore 'file nmae'         -> restore file from previous commit and this command use in untracked/working area [ Not Staging Area ] For one file
    git add                         -> Track your files and changes your files
    git diff                        -> Show all changes from current work to staging area work in file
    git commit                      -> save your files in git
    git remote add <repo_name> <url>-> add repository url
    git remote -v                   -> display the set url to origin
    git push                        -> Upload git commit to a remote repo like github
    git pull                        -> Download changes from remote repo to your local machine
    git log                         -> check the all commit changes log file
    git reset                       -> it's fall back staging area to untracked area
    git reset 'commit no'           -> it's roll back to given commit number from git log
                                        ( it's work: add changes to untracked area)
    git reset --hard 'commit no'    -> it's roll back to given commit number from git log forcefully delete extra codes.

## What is the difference between pull and clone?

    Both are doing the same thing but 
        clone is download the entire project to your local system.
        You don't have working repo in your system.
        
        pull is download the All commits and branch in the remote repo to local system. 
        it means repo is already in your system.

    You Can do by Two ways,

    5.1. Cloning the Remote Repo to your Local host

        example: git clone https://github.com/user-name/repository.git

    5.2. Pulling the Remote Repo to your Local host

        First you have to create a git local repo by,

        example: git init or git init repo-name then, git pull https://github.com/user-name/repository.git

        That's all, All commits and branch in the remote repo now available in the local repository of your computer.

## Local git workflow:-

    touch README.md                             ==> Before create a repo make a README.md file
        |               
        |                   
    git init                                    ==> initializaion of repository
        |
        |
    git status [untracked area]                 ==> check the status of your new and modified files
        |
        |
    git stash save "message"                    ==> before commit the code we have to save in cache/local memory
        |
        |
    git stash list                              ==> list all stash with respective id
        |
        |
    git stash apply <id>                        ==> that id of store code apply to repo
        |
        |
    git add .                                   ==> changes files to ready to commit
    git add file_name [staging area]
        |
        |
    git diff
        |
        |
    git commit -m "heading message" -m "description(option)" ==> save the changes in local repo
        |
        |
    git checkout id_number                      ==> go back to the id number of repo
        |
        |
    git checkout master                         ==> Now goto the master or last repo that commit in repo
        |
        |
    git remote -v                               ==> check the origin set in correct/working repo
    git remote add Repository_name https://github.com/partha-bro/study-repo.git  ==> add remote working repo to origin for short hand
    OR
    git remote set-url Repository_name http://user_name:password-token@github.com/user_name/repo_name.git                                             
                                                ==> add remote working repo to origin for short hand
    git push origin master                      ==> upload the local repo to remote repo
        |
        |
    git pull https://github.com/partha-bro/study-repo.git ==> download the changes of the remote repo (git fetch + git merge)= git pull

## What is Git branch?

    A branch represents an independent line of development. 
    Branches serve as an abstraction of the edit/stage/commit process.

## Common options:-

    git branch                                 ==> list all the branches
        |
        |
    git branch -v                              ==> list all the branches with last commited message 
        |
        |
    git branch "branch_name"                   ==> create new branch
        |
        |
    git checkout "branch_name"                 ==> goto the specific branch
        |
        |
    git checkout -b "branch_name"              ==> create and goto the same branch at same command(shorthand)
        |
        |
    git diff "branch_name"                     ==> code difference/modified between two branches
        |
        |
    git merge "branch_name" master             ==> merge branch to master
        |
        |
    git branch --merged                        ==> Only Show all merged branch
        |
        |
    git branch --no-merged                     ==> Only Show unmerged branch 
        |
        |
    git push origin "branch_name"              ==> upload branch changes to github repo
        |
        | 
    git branch -d "branch_name"                ==> delete the branch after merging is complete
        |                                                   if not then show error 
        |
    git branch -D "branch_name"                ==> if you want to delete the branch without merging [ It may loss your code ]

## How to undoing my changes in git?

    git log                                    ==> check the all commit changes log file like history
    git log --graph --oneline                  ==> check the all logs in one line manner in graph mode
    git reset 'file_name'                      ==> it's roll back staging area to untracked area
    git reset 'commit no'                      ==> it's roll back to given commit number from git log
                                                            ( it's work: add changes to untracked area)
    git reset --hard 'commit no'               ==> it's roll back to given commit number 
                                                            from git log forcefully delete extra codes.

## What is Git stash in git?

    Sometimes you want to switch the branches, but you are working on an incomplete part of your current project. You don't want to make a commit of half-done work. Git stashing allows you to do so. The git stash command enables you to switch branches without committing the current branch.

    Generally, the stash's meaning is "store something safely in a hidden place." The sense in Git is also the same for stash; Git temporarily saves your data safely without committing like cache in browser.

        Command:
            $ git stash                             ==> To save it temporarily, we can use the git stash command. 
            $ git stash save "<Stashing Message>"   ==> the changes can be stashed with a message. 
            $ git stash list                        ==> It will display all the stashes respectively with different stash id
            $ git stash apply                       ==> You can re-apply the changes that you just stashed by using the git stash command.
            $ git stash apply <stash id>            ==> stash index id to apply the particular commit.
            $ git stash show                        ==> command will show the file that is stashed and changes made on them.
            $ git stash pop                         ==> Git allows the user to re-apply the previous commits by using git stash pop command.
            $ git stash drop <stash id>             ==> <stash id> has been deleted from the queue.
            $ git stash clear                       ==> command allows deleting all the available stashes at once.
            $ git stash branch <Branch Name>        ==> command will create a new branch and transfer the stashed work on that.

## What is Git merge conflict?

    -> Git can handle most merges on its own with automatic merging features. 
    A conflict arises when two separate branches have made edits to the same line in a file, or when a file has been deleted in one branch but edited in the other. Conflicts will most likely happen when working in a team environment.

    Resolving the conflit file, please goto the respective file you can change to what you want to changed, then add to staging area after that commit.

    for reference: https://www.youtube.com/watch?v=nfOxUaA2trY

## What is gitignore?

    It is a file that tells about which files are not to be add to local/remote repository.
    We can use it for no push sensitive data like password, personal info, api keys etc.

    Make a file and name it .gitignore
    $ touch .gitignore

    Make a comment using # symbol
        # comment 1
        # comment 2

    write file name or folder name using next line, more than one ignore file/folder in next line, not in a single line
    Example:
        node_modules/
        apiKeys.txt
        *.log

    Website: A collection of .gitignore templates: https://github.com/github/gitignore

## What is fork in Github?

    When we click fork button in any repository of github, that repo's copy is created in my github profile.
    in short, it takes ownership of any repository to mine.

    Example:
         Person 1 (Owner) : Hosts a project on github

         Person 2 : Copy the Project (Fork)
                    make desired changes to the code
                    Request the owner to update the code base (Pull Request)

         person 1 (Owner) : Reviews the code change & make the changes to original code base
                            ( Merge Pull Request)

## How to check prev command and how to directly run that command?

    A. `history` command is use to show your all prev typing command in git terminal.
    B. `!` this exponential symbol with your number of cammand hit run that command.

        example:
                $ history
                1. ls
                2. whoami
                3. history

                $ !2<enter>
                result of whoami command
