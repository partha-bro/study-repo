<?php
// ### TOPIC NAME: Files ###

// /*
//     1. Working with Directories                      	Line = 15
//         1.1 List all Files in a Directory
//             scandir()
//         1.2 Check for Specific Files in a Directory
//             is_file()
//         1.3 Check If the Name is a Directory or File.
//             is_dir()
//         1.4 Create Directory
//             file_exists()
//             mkdir()
//         1.5 Copy Files between Directories.
//             copy()
//     2. Copy, Rename and Delete a File                	Line = 47
//         2.1 copy()
//         2.2 rename()
//         2.3 unlink()
//     3. Read and Write Files                       		Line = 73
//     4. Read Configuration File into an Array            Line = 136
//     4. Read and Write CSV Data                        	Line = 152
//     5. Exercise 1                           			Line = 209 
//     6. Exercise 2                           			Line = 209
// */

// //  1. Working with Directories
//     // List all Files in a Directory
//     /*
// 		scandir() -> for list of dirs and files
//     */
//         $path = '../../php';
//         $files = scandir($path);
//         print_r($files);

//     // Remove both . and .. file list
//         print_r(array_diff($files, [".",".."]));

//     // Remove both . and .. file list
//         foreach ($files as $key => $value) {
//             # code...
//             if ($value != "." && $value != "..") {
//                 # code...
//                 echo "$value <br/>".PHP_EOL;
//             }
//         }
//     // check file exist and dir exist
//         /*
//             is_file() -> check file
//             is_dir() - > check dir
//         */ 
//         $file = 'index.php';
//         echo is_file($file);

//         $dir = '../03-01-21';
//         echo is_dir($dir);

//     // Want to find all php files from dir
//         $result = glob("*.php");
//         print_r($result);

//     // Create Directory
//         if (!file_exists('testfolder')) {
//             # code...
//             mkdir('testfolder');
//         }

//     // Copy Files between Directories.
//         copy('index.php', 'testfolder/dummy.php');
// //  2. Copy, Rename and Delete a File   
//         $file = 'index.php';
//         if (file_exists($file)) {
//             # code...
//             if ( is_dir($file)) {
//                 # code...
//                 die("this is a directory, not a file!");
//             }else{
//                 //copy the file
//                 copy($file, 'dummy2.txt');

//                 //rename the file
//                 rename('dummy2.txt', 'dummy3.txt');

//                 //delete the file
//                 unlink('dummy3.txt');
//             }
//         }else{
//             echo "No such file or folder";
//         }
//  3. Read and Write Files  
    /* 
        Step 1: Open a file
        Step 2: Read file content
        Step 3: Close the file

        File Modes
        r- read mode
        w- write mode
        a- append mode                   	
    */
    // Method 1
        $fileName = 'testfolder/dummy.php';
        $content = file_get_contents($fileName);
        echo $content.PHP_EOL;

    // Method 2
        // open file
        $filehandler = fopen($fileName, 'r');
        $filesize = filesize($fileName);

        // read file
        $content = fread($filehandler, $filesize);
        echo "$content".PHP_EOL;

//  4. Read Configuration File into an Array            
//  4. Read and Write CSV Data                        	
//  5. Exercise 1                           			
//  6. Exercise 2
