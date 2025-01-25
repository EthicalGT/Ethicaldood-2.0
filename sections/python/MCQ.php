<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ED-Python[MCQ]</title>
        <link rel="icon" href="../../images/fevicon.png">
        <link rel="stylesheet" href="mcq.css">
    </head>
    <body>
        <section class="header">
            <nav>
                <a href="../../index.php"><img src="../../images/ETHICALDOOD 2.0.png"></a>
                <div class="nav">
    <ul>
        <li><a href="../../index.html">Home</a></li>
        <li><a href="../../Forum/forum.php">Forum</a></li>
        <li><a href="../../compiler.html">Compiler</a></li>
        <li id="files"><a>Arrivals</a>
            <div class="files-submenu">
                <ul>
                    <li><a href="../../files/users.php">User</a></li>
                    <br>
                    <li><a href="../../files/UF.php">Admin</a></li>
            </div>
        </li>
        <li><a href="../../question papers/QS.php">Papers</a></li>
        <li id="login"><a>Login</a>
            <div class="login-submenu">
                <ul>
                    <li><a href="../../ulogin.php">User</a></li>
                    <br>
                    <li><a href="../../Admin 2/Admin login.php">Admin</a></li>
            </div>
        </li>
        <li><a href="../../feedback/feedback.php">Feedback</a></li>
        <li id="codes"><a>Codes</a>
        <div class="submenu">
        <ul>
            <li><a href="../html/html.php">HTML</a></li>
            <li><a href="../php/php.php">PHP</a></li>
            <li><a href="../python/python.php">Python</a></li>
            <li><a href="../java/java.php">Core Java</a></li>
        </ul>
        </div>
        </li>
        <li><a href="../../about us/about.php">About Us</a></li>
    </ul>
        
        </div>
            </nav>
        </section>
    <div class="question-paper" id="main-box">
        <h1>Python Test</h1>
        <div class="question">
            1. What will be the output of the following Python Code?
            <br>
            &nbsp;&nbsp;&nbsp;x=[1,2,3,4,5]
            y=x
            x.append(6)
            print(len(y))
        </div>
        <form  action="result.php" method="POST">
        <ul>
            <li>
                <label>
                    <input type="radio" name="q1" value="1" required> a) 5
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q1" value="0" required> b) 6
                </label>
            </li>
            <li >
                <label>
                    <input type="radio" name="q1" value="0" required> c) 7
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q1" value="0" required> d) Error
                </label>
            </li>
        </ul>
        
        <div class="question">
            2. What will be the output of the following Python Code?
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;x=[1,2,3,4,5]
            y=x
            x=x+[60,70]
            print(len(y))
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q2" value="0" required> a) 5
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q2" value="1" required> b) 6
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q2" value="0" required> c) 7
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q2" value="0" required> d) Error
                </label>
            </li>
        </ul>
        <div class="question">
            3. What will be the output of the following Python Code?
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;def fun(x):
            x=2
            return x

            x=1
            y=fun(x)
            print(x,y)
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q3" value="0" required> a) 1 2
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q3" value="0" required> b) 2 2
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q3" value="1" required> c) 1 1
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q3" value="0" required> d) 2 1
                </label>
            </li>
        </ul>
        <div class="question">
            4. What is the correct way to open a file named "data.txt" in python for reading?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q4" value="1" required> a) file=open("data.txt","r")
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q4" value="0" required> b) file=open("data.txt","w")
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q4" value="0" required> c) file=open("data.txt","a")
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q4" value="0" required> d) file=open("data.txt","x")
                </label>
            </li>
        </ul>
        <div class="question">
            5. What will be the output for the following code?<br>
            &nbsp;&nbsp;&nbsp;&nbsp;mylist=[1,2,3,4,5]<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print(mylist[1:3])
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q5" value="1" required> a) [2,3]
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q5" value="0" required> b) [1,2]
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q5" value="0" required> c) [3,4]
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q5" value="0" required> d) [2,4]
                </label>
            </li>
        </ul>
        <div class="question">
            6. What will be the output of the following code?
            &nbsp;&nbsp;&nbsp;&nbsp;<br>def fun(age):<br>
            &nbsp;&nbsp;&nbsp;&nbsp;try:
            <br>&nbsp;&nbsp;&nbsp;&nbsp;if age>18:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;print("Valid for Voting")<br>&nbsp;&nbsp;&nbsp;&nbsp;else:<br>&nbsp;&nbsp;&nbsp;&nbsp;raise MyError<br>
            &nbsp;&nbsp;&nbsp;&nbsp;except MyError:
            <br>&nbsp;&nbsp;&nbsp;&nbsp;print("Not Valid for Voting.")<br>
            &nbsp;&nbsp;&nbsp;&nbsp;fun(19)
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q6" value="0" required> a) Valid For Voting
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q6" value="0" required> b) Not Valid for Voting
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q6" value="1" required> c) Error Occurs
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q6" value="0" required> d) None of the above
                </label>
            </li>
        </ul>
        <div class="question">
            7. HAS-A Relationship in python is used for?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q7" value="0" required> a) accessing data members
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q7" value="0" required> b) accessing member functions
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q7" value="1" required> c) accessing both without inheritance
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q7" value="0" required> d) creating object within a class
                </label>
            </li>
        </ul>
        <div class="question">
            8. Which of the following & operator in python is used to satisfy truthiness of operands ?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q8" value="0" required> a) &
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q8" value="0" required> b) and
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q8" value="1" required> c) both
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q8" value="0" required> d) &&
                </label>
            </li>
        </ul>
        <div class="question">
            9. In tkinter when user select multiple options inside a listbox why multiple outputs are not displayed even we print selected items inside a loop?
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q9" value="0" required> a) because each time loop iterates it get stopped automatically and not shows upnext value
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q9" value="0" required> b) each time loop iterates get() cannot handle all that items selected because its index overrides
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q9" value="1" required> c) each time loop iterates the previous value is overwritten with the new value selected by the user
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q9" value="0" required> d) because we diden't use update() method inside the loop
                </label>
            </li>
        </ul>
        <div class="question">
            10. In Tkinter which function is used to show selected values from an Listbox after a time interval when we use a loop? 
        </div>
        <ul>
            <li>
                <label>
                    <input type="radio" name="q10" value="1" required> a) update(time,values)
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q10" value="0" required> b) get(time,values)
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q10" value="0" required> c) get(time,values)
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" name="q10" value="0" required> d) None of the above
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