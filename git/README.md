# GIT Profile

## GIT 
---------------------------------------------
    1. What is GIT?
    2. What is version control system?
    3. TERMS:-
    4. Git commands:-
    5. What is the difference between pull and clone?
    6. Local git workflow:-
    7. What is Git branch?
    8. Common options command on branch:-
    9. How to undoing my changes in git?
    10. What is fork in Github?
---------------------------------------------

## What is GIT?
    -> Free and open source version control system.

## What is version control system?
    -> The management of changes to documents,computer programs, large web sites and 
    others collections of information.
    We track our code changes in GIT.

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
    git add                         -> Track your files and changes your files
    git commit                      -> save your files in git
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
<pre>
    touch README.md                                                     ==> Before create a repo make a README.md file
        |               
        |                   
    git init                                                            ==> initializaion of repository
        |
        |
    git status [untracked area]                                         ==> check the status of your new and modified files
        |
        |
    git add . (for all new and modified files)                          ==> changes files to ready to commit
    git add file_name [staging area]
        |
        |
    git commit -m "heading message" -m "description(option)"            ==> save the changes in local repo
    git commit -am "heading message" -m "description(option)"           ==> shorthand for add and commit the code
        |
        |
    git remote -v                                                       ==> check the origin set in correct/working repo
    git remote add origin https://github.com/partha-bro/study-repo.git  ==> add remote working repo to origin for short hand
    git push origin master                                              ==> upload the local repo to remote repo
        |
        |
    git pull https://github.com/partha-bro/study-repo.git               ==> download the changes of the remote repo
</pre>
## What is Git branch?
    A branch represents an independent line of development. 
    Branches serve as an abstraction of the edit/stage/commit process.

## Common options:-

    git branch                                          ==> list all the branches
        |
        |
    git branch "branch_name"                            ==> create new branch
        |
        |
    git checkout "branch_name" or master                ==> goto the specific branch
        |
        |
    git checkout -b "branch_name"                       ==> create and goto the same branch at same command(shorthand)
        |
        |
    git diff "branch_name"                              ==> code difference/modified between two branches
        |
        |
    git merge "branch_name" master                      ==> merge branch to master
        |
        |
    git push origin "branch_name"                       ==> upload branch changes to github repo
        |
        | 
    git branch -d "branch_name"                         ==> delete the branch after merging is complete
        |                                                   if not then show error 
        |
    git branch -D "branch_name"                         ==> if you want to delete the branch without merging

## How to undoing my changes in git?

    git log                                             ==> check the all commit changes log file like history
    git reset 'file_name'                               ==> it's roll back staging area to untracked area
    git reset 'commit no'                               ==> it's roll back to given commit number from git log
                                                            ( it's work: add changes to untracked area)
    git reset --hard 'commit no'                        ==> it's roll back to given commit number 
                                                            from git log forcefully delete extra codes.

## What is fork in Github?
    when we click fork button in any repository of github, that repo's copy is created in my github profile.
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
