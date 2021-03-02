<?php
### TOPIC NAME: Files ###

/*
    1. Working with Directories                         Line = 33
        1.1 List all Files in a Directory
            scandir()
        1.2 Check for Specific Files in a Directory
            is_file()
        1.3 Check If the Name is a Directory or File.
            is_dir()
        1.4 Create Directory
            file_exists()
            mkdir()
        1.5 Copy Files between Directories.
            copy()
    2. Copy, Rename and Delete a File                   Line = 76
        2.1 copy()
        2.2 rename()
        2.3 unlink()
    3. Read and Write Files                             Line = 96
        3.1 file_get_contents()
        3.2 file_put_contents()
        3.3 file_put_contents('filename','data',FILE_APPEND)
    4. Read Configuration File into an Array            Line = 136
        4.1 parse_ini_file()
    5. Read and Write CSV Data                          Line = 142
        5.1 file()
    6. Exercise 1                                       Line = 151 
    7. Exercise 2                                       Line = 164
    8. Assignment                                       Line = 183
*/

//  1. Working with Directories
    // List all Files in a Directory
    /*
		scandir() -> for list of dirs and files
    */
        $path = '../../php';
        $files = scandir($path);
        print_r($files);

    // Remove both . and .. file list
        print_r(array_diff($files, [".",".."]));

    // Remove both . and .. file list
        foreach ($files as $key => $value) {
            # code...
            if ($value != "." && $value != "..") {
                # code...
                echo "$value <br/>".PHP_EOL;
            }
        }
    // check file exist and dir exist
        /*
            is_file() -> check file
            is_dir() - > check dir
        */ 
        $file = 'index.php';
        echo is_file($file);

        $dir = '../03-01-21';
        echo is_dir($dir);

    // Want to find all php files from dir
        $result = glob("*.php");
        print_r($result);

    // Create Directory
        if (!file_exists('testfolder')) {
            # code...
            mkdir('testfolder');
        }

    // Copy Files between Directories.
        copy('index.php', 'testfolder/dummy.php');
//  2. Copy, Rename and Delete a File   
        $file = 'index.php';
        if (file_exists($file)) {
            # code...
            if ( is_dir($file)) {
                # code...
                die("this is a directory, not a file!");
            }else{
                //copy the file
                copy($file, 'dummy2.txt');

                //rename the file
                rename('dummy2.txt', 'dummy3.txt');

                //delete the file
                unlink('dummy3.txt');
            }
        }else{
            echo "No such file or folder";
        }
//  3. Read and Write Files  
    /* 
        Step 1: Open a file
        Step 2: Read file content
        Step 3: Close the file

        File Modes
        r- read mode
        w- write mode
        a- append mode  means: data write in last line                 	
    */
    // Method 1 for read content
        $fileName = 'testfolder/dummy.php';
        $content = file_get_contents($fileName);
        echo $content.PHP_EOL;

    // Method 2 for read content
        // open file
        $filehandler = fopen($fileName, 'r');
        $filesize = filesize($fileName);

        // read file
        $content = fread($filehandler, $filesize);
        echo "$content".PHP_EOL;

        // close the file
        fclose($filehandler);

    // Method 3 for write content
        $filehandler = fopen($fileName, 'w');
        fwrite($filehandler, "Another Text write through fwrite function again");
        $content = file_get_contents($fileName);
        fclose($filehandler);
        echo $content . PHP_EOL;

    // Method 4 for write content
        file_put_contents($fileName, 'Write data through file_put_contents(filename, data) function');
        $content = file_get_contents($fileName);
        echo $content . PHP_EOL;

//  4. Read Configuration File into an Array
        $setting = parse_ini_file('testfolder/config.ini');
        foreach ($setting as $key => $value) {
            # code...
            echo $key . " => ".$value.PHP_EOL;
        }
//  5. Read and Write CSV Data                        	
        $student_csv_file_path = 'testfolder/student.csv';
        $student_csv = file($student_csv_file_path);
        foreach ($student_csv as $value) {
            # code...
            $data[] = str_getcsv($value);
            print_r($data);
        }

//  6. Exercise 1      
    /*
        1) Create a File, Write Content and Save the File.
        2) Use fopen libraries  
        3) Append some text in the last.
    */      
        $filehandler = fopen('testfolder/newfile.txt', 'w');
        fwrite($filehandler, "this in write some data\n");
        fwrite($filehandler, "this in write some data part 2\n");
        fclose($filehandler);
        file_put_contents('testfolder/newfile.txt', 'Added some extra data in last line',FILE_APPEND);
        $content = file_get_contents('testfolder/newfile.txt');
        echo $content.PHP_EOL;
//  7. Exercise 2
    /*
        1) Read a file
        2) Append some content at the last using fopen
    */
        $file_path = 'testfolder/newfile.txt';
        if (file_exists($file_path)) {
            # code...
            $filehandler = fopen($file_path, 'a');
            fwrite($filehandler, "\nThis is the last sentence in new file using fopen() in append.\n");
            fclose($filehandler);

            $content = file_get_contents($file_path);
            echo "$content".PHP_EOL;
        }else{
            die('File Not Found!');
        }
?>
    <hr/>
    <button><a href="assingment.php"> ASSIGNMENT </a></button>
    <hr/>