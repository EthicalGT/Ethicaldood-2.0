<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Python</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="mcq.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="../../index.php"><img src="../../images/ETHICALDOOD 2.0.png"></a>
                <div class="nav">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="Forum/forum.php">Forum</a></li>
        <li><a href="compiler.html">Compiler</a></li>
        <li id="files"><a>Arrivals</a>
            <div class="files-submenu">
                <ul>
                    <li><a href="#">User</a></li>
                    <br>
                    <li><a href="#">Admin</a></li>
            </div>
        </li>
        <li><a href="question papers/QS.php">Papers</a></li>
        <li id="login"><a>Login</a>
            <div class="login-submenu">
                <ul>
                    <li><a href="#">User</a></li>
                    <br>
                    <li><a href="#">Admin</a></li>
            </div>
        </li>
        <li><a href="feedback/feedback.php">Feedback</a></li>
        <li id="codes"><a>Codes</a>
        <div class="submenu">
        <ul>
            <li><a href="sections/html/html.php">HTML</a></li>
            <li><a href="sections/php/php.php">PHP</a></li>
            <li><a href="sections/python/python.php">Python</a></li>
            <li><a href="sections/core java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="about us/about.php">About Us</a></li>
    </ul>
        </div>
            </nav>
        </section>
    <div class="question-paper" id="main-box">
        <h1>PHP TEST</h1>
        <div class="question">
            1. What will be the output:
            &lt;?php $x=0; if($x==1) if($x>=0) echo "true"; else echo "false";
        </div>
        <form  action="result.php" method="POST">
        <ul>
            <li>
                <label>
                    <input type="radio" name="q1" value="0" required> a) true
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q1" value="0" required> b) false
                </label>
            </li>
            <li >
                <label>
                    <input type="radio" name="q1" value="0" required> c) error
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q1" value="1" required> d) no output
                </label>
            </li>
        </ul>
        
        <div class="question">
            2. Which function will return true if a variable is an array or false if it is not? 
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q2" value="0" required> a) this_array
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q2" value="1" required> b) is_array
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q2" value="0" required> c) do_array
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q2" value="0" required> d) in_array
                </label>
            </li>
        </ul>
        <div class="question">
            3. Which function returns an array consisting of assosciative key/value pairs?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q3" value="0" required> a) count()
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q3" value="0" required> b) array_count()
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q3" value="1" required> c) array_count_values()
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q3" value="0" required> d) count_values()
                </label>
            </li>
        </ul>
        <div class="question">
            4. What will be the output of the following code:
            &lt;?php $op2="blaba";
            function demo($op1){
                echo $op1;
                echo $op2;
            }
            demo("hello");
            ?&gt;
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q4" value="0" required> a) helloblaba
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q4" value="0" required> b) error
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q4" value="1" required> c) hello
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q4" value="0" required> d) helloblabablaba
                </label>
            </li>
        </ul>
        <div class="question">
            5. What is the purpose of the PHP function htmlspecialchars()?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q5" value="1" required> a)  It converts special characters to HTML entities
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q5" value="0" required> b)  It encodes data for secure transmission over the network.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q5" value="0" required> c) It converts HTML entities to plain text.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q5" value="0" required> d)  It sanitizes user input to prevent SQL injection
                </label>
            </li>
        </ul>
        <div class="question">
            6. Which of the following PHP functions is used to open a file for writing and erase its contents if it already exists?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q6" value="0" required> a) fopen()
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q6" value="0" required> b) fwrite()
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q6" value="1" required> c) fopen("w")
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q6" value="0" required> d) file_put_contents()
                </label>
            </li>
        </ul>
        <div class="question">
            7. Which of the following is not a valid magic constant in PHP?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q7" value="0" required> a) LINE
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q7" value="0" required> b) FILE
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q7" value="0" required> c) FUNCTION
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q7" value="1" required> d) DATETIME
                </label>
            </li>
        </ul>
        <div class="question">
            8. In PHP, what is the purpose of the compact() function?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q8" value="0" required> a) It compresses files to save disk space.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q8" value="1" required> b)  It creates an array containing variables and their values.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q8" value="0" required> c) It optimizes SQL queries for better performance.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q8" value="0" required> d)  It generates compressed output for faster page loading
                </label>
            </li>
        </ul>
        <div class="question">
            9. What is the difference between include and require in PHP?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q9" value="1" required> a) include and require both include a file, but include continues execution even if the file is not found, while require terminates execution.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q9" value="0" required> b) include is used for including PHP files, and require is used for including non-PHP files.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q9" value="0" required> c) include is a statement, and require is a function.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q9" value="0" required> d) There is no difference; they are interchangeable.
                </label>
            </li>
        </ul>
        <div class="question">
            10. What is the primary difference between mysql_ functions and mysqli_ functions in PHP?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q10" value="0" required> a) mysql_ functions are used for MySQL databases, while mysqli_ functions are used for other database systems.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q10" value="1" required> b) mysql_ functions are deprecated, while mysqli_ functions are the improved and recommended alternative.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q10" value="0" required> c) mysql_ functions are faster but less secure than mysqli_ functions.
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q10" value="0" required> d) There is no difference between them; they can be used interchangeably.
                </label>
            </li>
        </ul>
        
        <div class="sbmt"><input type="submit" name="sbmt"></div>
    </form>
    
</div>
<!---<div class="alert" id="alert-msg">
    <h2>Hurray..!</h2>
    <p>You Got Marks..!</p>
    <button onclick="goback()">Back</button>
</div>--->
<section class="footer">
        <h4> Follow Me On</h4>
    <div class="footer_col">

                    <div class="social">

                        <a href="https://m.facebook.com"><img src="../../images/facebook.png"></a>
                        <a href="https://www.google.com/"><img src="../../images/Googlell.png"></a>
                        <a href="https://twitter.com"><img src="../../images/twitter.png"></a>
                        <a href="https://instagram.com/the_gt_official?igshid=ZDdkNTZiNTM="><img src="../../images/instagram.png"></a>

                    </div>
                </div>
        <p>
            "ETHICALDOOD: Dive into Our Code Haven, Where Imagination Takes Flight, Excellence is Crafted, and Boundaries Fade Away..!"
        </p>
        <p><b>Version 2.0</b></p>
        <p>Crafted With ♥ by GT</p>
    </section>
    <script>
       var x=document.getElementById('showalert');
       var y=document.getElementById('main-box');
       var z=document.getElementById('alert-msg');
       function showalert(){
        y.style.display="none";
        z.style.display="block";
       }
       function goback(){
        z.style.display="none";
        y.style.display="block";
       }
    </script>
</body>
</html>