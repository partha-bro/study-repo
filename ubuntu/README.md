# Linux Materials

## What is Linux?

    Linux is an operating system, like macOS or Windows.

    It is also the most popular Open Source operating system, and it gives you a lot of freedom.

    It powers the vast majority of the servers that compose the Internet. It's the base upon which everything is built. But not just that. Android is based on (a modified version of) Linux.

## What is a LinuxShell?

    A shell is a command interpreter that exposes an interface to the user to work with the underlying operating system.

    It allows you to execute operations using text and commands, and it provides users advanced features like being able to create scripts.

    All shells originate from the Bourne Shell, called sh. "Bourne" because its creator was Steve Bourne.

## Basic Command ::>

### Introduction to Linux and shells

### Install Terminator shell for split terminal.
	
	$ sudo apt install terminator

#### The Linux man command to read about fellow command

    This is a man (from _manual_) page. Man pages are an essential tool to learn as a developer. They contain so much information that sometimes it's almost too much.

    $ man <command> <Enter> 
		- Press g for moving first line
		- Press G for moving last line
		- Press / and type search string
		- Press n and go forward to search string
		- Press N and go backward to search string

- **The Linux ls command**

    Inside a folder you can list all the files that the folder

    $ l
    $ ls
    $ ls -al
    $ ll

- **The Linux cd command**

    cd means change directory. You invoke it specifying a folder to move into.

    $ cd <folder_name or path>
    $ cd ..     => or back
    $ cd /      => goto the root folder
    $ cd ~      => goto the /home/user_name folder
    $ cd -      => goto the immediate previous folder

- **The Linux pwd command**

    Path of working directory

    $ pwd

- **The Linux mkdir command**

    Make a new directory
    
    $ mkdir foldername or path
    $ mkdir foldername_1 foldername_2 foldername_3

- **The Linux rmdir command**

    Remove the the folder not files

    $ rmdir foldername or path
    $ rmdir foldername_1 foldername_2 foldername_3

    Best command for delete directory

    $ rm -frv folder/path/files
    Attribute:
    f: force fully
    r: recursive
    v: print the action of deletion

- **The Linux mv command**

    Move the file source to destination

    $ mv <source_path> <file_1> <file_2> -t <destination_path>

    NOTE: we can use rename the file using mv command

- **The Linux cp command**

    Copy the file source to destination

    $ cp <source_path> <file_1> <file_2> -t <destination_path>

- **The Linux open command**

    The open command lets you open a file using this syntax:
    NOTE: The special . symbol points to the current directory, 
            as .. points to the parent directory

        In Ubuntu <open> command is not working instead of <xdg-open> command

    $ open <foldername>     or      xdg-open <foldername>
    $ open <filename>       or      xdg-open <filename>
    $ open .                or      xdg-open .
    $ open ..               or      xdg-open ..

- **The Linux touch command**

    Create a new document by this command

    $ touch filename

- **The Linux nano/vim command**

    Read or write file

    $ nano filename
    $ vim filename

- **The Linux ln command**

    It's used to create links. What is a link? It's like a pointer to another file, or a file that points to another file. You might be familiar with Windows shortcuts. They're similar.

    We have 2 types of links: hard links and soft links.

    Q. What is the difference between hard link and soft link?
    Hard link:  1. you can't link to directories
                2. you can't link to external filesystems
                3. If original file is destroyed then nothing happens to link file.
        $ ln <original> <link>

    Soft link:  1. you can link to directories
                2. you can't link to external filesystems
                3. If original file is destroyed then soft link will broken.
        $ ln -s <original> <link>

- **The Linux gzip command**

    You can compress a file using the gzip compression protocol named LZ77 using the gzip command.

    Here's the simplest usage:

    $ gzip filename

    This will compress the file, and append a .gz extension to it. The original file is deleted.

    To prevent this, you can use the -c option and use output redirection to write the output to the filename.gz file:

    $ gzip -c filename > <filename.gz>

        The -c option specifies that the output will go to the standard output stream, leaving the original file intact.

    $ gzip -d filename.gz       => for decompress the file
    
- **The Linux tar command**

    The tar command is used to create an archive, grouping multiple files in a single file.

    $ tar -cf <filename.tar> <folder/file1 file2>

    Attributes:
    -cf: for create tar
    -tf: for show the file in archive
    -xf: for extract the archive

- **The Linux zip command**

    This command is used to zip/archive the more than one files into zipfiles.

    $ zip -r <filename.zip> file_1 file_2 file_3

- **The Linux unzip command**

    This command is used to unzip the zip file.

    $ unzip filename.zip

- **The Linux cat command**

    $ cat file                  => Print the data of inside file
    $ cat > file                => Input new data of inside file and old data was removed
    $ cat >> file               => Input new data of inside file and that data paste in new line at the end
    $ cat file_1 > file_2       => Copy and paste content of file_1 to file_2, old file will be override.
    $ cat file_1 >> file_2      => Copy and paste content of file_1 to file_2, old file will not be override, paste in new line.

    NOTE: File save by pressing CTRL+D

- **The Linux less command**

    less command is use for read the document in terminal.

    $ less file

- **The Linux tail command**

    The best use case of tail in my opinion is when called with the -f option. It opens the file at the end, and watches for file changes.

    Any time there is new content in the file, it is printed in the window. This is great for watching log files, for example:

    $ tail -f /var/log/system.log

    To exit, press ctrl-C.

- **The Linux wc command**

    wc - print newline, word, and byte counts for each file

    The first column returned is the number of lines. 
    The second is the number of words. 
    The third is the number of bytes.

    $ wc file
    output: 3 13 64 file_2

- **The Linux find command**

    The find command can be used to find files or folders matching a particular search pattern. It searches recursively.

    Find directories under the current tree matching the name "src":

    $ find . -type d -name src

    Use -type f to search only files, or -type l to only search symbolic links.

    -name is case sensitive. use -iname to perform a case-insensitive search.

    $ find *.zip        => find all zip files

- **The Linux locate command**   

    locate is a Unix utility which serves to find files on filesystems. It searches through a prebuilt local database of all files on the filesystem.

    $ locate *string*       => * for all other string

- **The Linux grep command**

    $ grep -n string <filename>

- **The Linux echo command**

    The echo command does one simple job: it prints to the output the argument passed to it.

    $ echo "hello" >> output.txt

- **The Linux chown command**

    Every file/directory in an Operating System like Linux or macOS (and every UNIX system in general) has an owner.

    The owner of a file can do everything with it. It can decide the fate of that file.

    The owner (and the root user) can change the owner to another user, too, using the chown command:

    $ sudo chown <owner> <file>

- **The Linux chmod command**

    Every file in the Linux / macOS Operating Systems (and UNIX systems in general) has 3 permissions: read, write, and execute.

    
        1 if has execution permission
        2 if has write permission
        4 if has read permission

    This gives us 4 combinations:

        0 no permissions
        1 can execute
        2 can write
        3 can write, execute
        4 can read
        5 can read, execute
        6 can read, write
        7 can read, write and execute

    We use them in pairs of 3, to set the permissions of all the 3 groups altogether:

    $ chmod 777 filename

    $ chmod 755 filename

    $ chmod 644 filename

- **The Linux users command**

    How to add a new user in ubuntu.

    $ sudo useradd -m <userName>        :=> use -m for create a home directory

    $ sudo passwd <userName>

    $ sudo userdel <userName>

- **The Linux du command**

    The du command will calculate the size of a directory as a whole:

    $ du -h             => -h means readable siz of all folder
    $ du -sh 'folder'   => -h means readable siz of folder & -s for sepecific folder

- **The Linux df command**

    The df command is used to get disk usage information.
    Its basic form will print information about the volumes mounted:

    $ df -h

- **The Linux ps command**

    Your computer is running tons of different processes at all times.

    The a option is used to also list other users' processes, not just your own. x shows processes not linked to any terminal (not initiated by users through a terminal).

    $ ps ax

    You can search for a specific process combining grep with a pipe, like this:

    $ ps ax | grep firefox

- **The Linux top command**

    The top command is used to display dynamic real-time information about running processes in the system.

    $ top

    or we can use htop command for it

    $ htop

- **The Linux free command**

    This command is use to check the free memory of system.

    $ free -mh

- **The Linux kill command**

    The kill program can send a variety of signals to a program.
    It's not just used to terminate a program, like the name would suggest, but that's its main job.

    NOTE:
        1 corresponds to HUP means hang up.
        2 corresponds to INT means interrupt.
        9 corresponds to KILL.
        15 corresponds to TERM means terminate.
        18 corresponds to CONT means continue.
        15 corresponds to STOP.

    $ kill <PID>

    $ kill -9 <PID> or kill -kill <PID>

- **The Linux killall command**

    will send the signal to multiple processes at once instead of sending a signal to a specific process id.

    $ killall <name>
    
- **The Linux jobs command**

    When we run a command in Linux / macOS, we can set it to run in the background using the & symbol after the command.

    For example we can run top in the background:

    $ top &

    This is very handy for long-running programs.

    We can get back to that program using the fg command. This works fine if we just have one job in the background, otherwise we need to use the job number: fg 1, fg 2 and so on.

- **The Linux bg command**

    When a command is running you can suspend it using ctrl-Z.

    The command will immediately stop, and you get back to the shell terminal.

    You can resume the execution of the command in the background, so it will keep running but it will not prevent you from doing other work in the terminal.

    I can run bg 1 to resume in the background the execution of the job #1.

    I could have also said bg without any option, as the default is to pick the job #1 in the list.

    $ bg <number>

- **The Linux fg command**

    When a command is running in the background, because you started it with & at the end (example: top & or because you put it in the background with the bg command), you can put it to the foreground using fg.

    Running

    $ fg

- **The Linux which command**

    Suppose you have a command you can execute, because it's in the shell path, but you want to know where it is located.

    $ which zip
    output:- /usr/bin/zip

    $ which git
    output:- /usr/bin/git

- **The Linux nohup command**

    nohup (No Hang Up) is a command in Linux systems that runs the process even after logging out from the shell/terminal. 

    Sometimes you have to run a long-lived process on a remote machine, and then you need to disconnect.

    Or you simply want to prevent the command from being halted if there's any network issue between you and the server.

    The way to make a command run even after you log out or close the session to a server is to use the nohup command.

    Use nohup <command> to let the process continue working even after you log out.

    $ nohup <command>

    All the process is save in 'nohup.out' file, you can check using 

    $ tail -f nohup.out

- **The Linux whoami command**

    Type whoami to print the user name currently logged in to the terminal session:

    $ whoami

- **The Linux who command**

    Type whoami to print the user name currently logged in to the terminal session:

    $who

- **The Linux su command**

    While you're logged in to the terminal shell with one user, you might need to switch to another user.

    su for switch user...

    $ su <username>

- **The Linux sudo command**

    sudo is commonly used to run a command as root.

    You must be enabled to use sudo, and once you are, you can run commands as root by entering your user's password (not the root user password).

    $ sudo <command>

- **The Linux passwd command**

    Users in Linux have a password assigned. You can change the password using the passwd command.

    There are two situations here.

    The first is when you want to change your password for normal user. In this case you type:

    $ passwd

    and an interactive prompt will ask you for the old password, then it will ask you for the new one.

    When you're root (or have superuser privileges) you can set the username for which you want to change the password:

    $ passwd <username> <new password>

    In this case you don't need to enter the old one.

- **The Linux ping command**

    The ping command pings a specific network host, on the local network or on the Internet.

    $ ping IP
    $ ping website
    
- **The Linux clear command**

    Type clear to clear all the previous commands that were run in the current terminal.

    The screen will clear and you will just see the prompt at the top:

    $ clear

- **The Linux history command**

    It provides the previous command list in list manner

    $ history
	$ !<number>
	$ history -c  			// delete all commands
	$ history -d <number>  	// delete specific number of command
	$ <space><command>		// this command will not save in history
	
	NOTE: If you want to save command in history with proper time then
		
		$ HISTTIMEFORMAT="%d/%m/%y %T "
		$ history >> history.txt
		Now all entered command in time format and save to file

### How to check prev command and how to directly run that command?

    A. `history` command is use to show your all prev typing command in git terminal.
    B. `!` this exponential symbol with your number of cammand hit run that command.

        example:
                $ history
                    1. ls
                    2. whoami
                    3. history

                $ !2<enter>
                    result of whoami command
    C. Below command is use to delete the history records from terminal
        $ history -c

- **The Linux crontab command**

    Cron jobs are jobs that are scheduled to run at specific intervals. You might have a command perform something every hour, or every day, or every 2 weeks. Or on weekends.

    They are very powerful, especially when used on servers to perform maintenance and automations.

    $ crontab -e        // to open crontab file for create jobs
    $ crontab -l        // displays all list of cron jobs

    for Generate cron jobs best website is : https://crontab-generator.org/

- **The Linux uname command**

    This command is use for print all imformation about your syatem

    $uname -a

    output: os_name device_name version release_date hardware_name processor_architecture 

### 16 Things You MUST DO After Installing Any Linux Distro:-

    1. $ sudo apt update
    2. $ sudo apt install vlc
    3. $ sudo add-apt-repository ppa:linrunner/tlp
    4. $ sudo apt-get install tlp tlp-rdw
    5. $ sudo add-apt-repository ppa:ubuntuhandbook1/apps
    6. $ sudo apt install laptop-mode-tools
    7. Change Mirror: Open Update Manger>Edit>software sources   change in main and base mirrors to india.
    8. Update hardware drivers
    9. Configure Display
    10.Install microsoft fonts  ==> Open Synaptic Package Manger>Search for "mscorefont">right click on result package and mark for installation>apply
    11.Use "redshift" for reduce blue light
    12.Active Firewall
    13.Configure Statup application
    14.Auto clean chache: $ sudo apt-get clean
    15.Auto remove: $ sudo apt-get autoremove
    16.Auto clean: $ sudo apt-get autoclean

### How to find ip Address and MAC Address?

    ifconfig
    => If ifconfig command is not installed the follow below command
        $ sudo apt install net-tools 

### How to Install Wine 6.0 in Ubuntu?

    https://www.tecmint.com/install-wine-in-ubuntu/

### How to find Package and dependency pkg?

    URL: https://ubuntu.pkgs.org/

### Enable 32-bit Architecture

    $ sudo dpkg --add-architecture i386

### How to fix some files in ubuntu? [its auto add or auto remove packages...]

    $ sudo apt -f install

### how to access full permission of file mangaer in GUI mode?

    $ nautilus

### How to make a root user and give a password?

    $ sudo su

### How to find the Process ID (PID) of a running terminal program?

    $ ps ax | grep firefox
    
    $ sudo kill pid

    short command: $ kill -9 $(ps -x ! grep firefox)

### How to open the task manager in linux?

    $ top   [ In build command ]
    $ htop  [ Better graphics task manager than <top> ]
        if command is not found then install it
        $ sudo apt install htop

### How to change mozila firefox browser css?

    URL: https://www.ghacks.net/2019/05/24/firefox-69-userchrome-css-and-usercontent-css-disabled-by-default/

### How can I fix this? 
- [E: Could not get lock /var/lib/dpkg/lock - open (11 Resource temporarily unavailable) E: Unable to lock the administration directory (/var/lib/dpkg/) is another process using it?]

    $ sudo rm /var/lib/dpkg/lock-frontend
    $ sudo rm /var/lib/dpkg/lock

### How to show or hide hidden folder/files in ubuntu?

    Press: ctrl+h

### How to import or export db file to mysql database?

    Import:
            $ /opt/lampp/bin/mysql -u 'username' -p 'password' 'Database_name' < 'filename.db'
    Export:
            $ /opt/lampp/bin/mysqldump -u 'username' -p 'password' 'Database_name' > 'filename.db'

### How can you start lampp server services in ubuntu system?

    Command:

        Lampp start: $ /opt/lampp/lampp start
        Apache start: $ /opt/lampp/lampp startapache
        MySql start: $ /opt/lampp/lampp startmysql
        status: $ /opt/lampp/lampp status

    If you want to open lampp manager GUI version
        $ cd /opt/lampp
        $ sudo ./manager*

### How to dispplay git branch name on gnome-terminal/Terminal in ubuntu?
    
    Step 1: $ nano ~/.bashrc
    Step 2:
            # Show git branch name
            force_color_prompt=yes
            color_prompt=yes
            parse_git_branch() {
             git branch 2> /dev/null | sed -e '/^[^*]/d' -e 's/* \(.*\)/(\1)/'
            }
            if [ "$color_prompt" = yes ]; then
             PS1='${debian_chroot:+($debian_chroot)}\[\033[01;32m\]\u@\h\[\033[00m\]:\[\033[01;34m\]\w\[\033[01;31m\]$(parse_git_branch)\[\033[00m\]\$ '
            else
             PS1='${debian_chroot:+($debian_chroot)}\u@\h:\w$(parse_git_branch)\$ '
            fi
            unset color_prompt force_color_prompt
    Step 3: source ~/.bashrc
