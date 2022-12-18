<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="nav-custom">
            <div class="container">
                <a class="navbar-brand text-white" href="#"><img src="{{URL::asset('img/sldm-logo.png')}}" class="img-fluid" id="sldm-logo" alt="SLDM Logo"> St. Louise de Marillac</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false">Account</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Sign Up</a>
                                <a class="dropdown-item" href="#">Sign In</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#organization">Organization</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#contact-us">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <section class="mt-5" id="about-us">
                <h1>About Us</h1>
                <p>
                    St. Louise de Marillac Clinics and Laboratory Inc. is a privately owned institution located at the heart of Roxas City established with the 
                    prime goal of providing medical consultations by competent medical practitioners and providing accurate, reliable, and affordable diagnostic 
                    procedures and clinical laboratory tests: The clinical laboratory has the following vision, mission, and quality policy:
                </p>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2>Vision</h2>
                        <p>
                            St. Louise de Marillac Clinical Laboratory is committed to being a leader in clinical and laboratory standards to contribute to and improve 
                            quality healthcare in Capiz and neighboring provinces.
                        </p>
                    </li>
                    <li class="list-group-item">
                        <h2>Mission</h2>
                        <p>
                            To provide excellent and updated practices in clinical and laboratory testing, and to train our personnel to demonstrate high-quality 
                            technical and clinical competence in serving their patients and the laboratory profession.
                        </p>
                    </li>
                    <li class="list-group-item">
                        <h2>Goal</h2>
                        <p>
                            <ul class="list-group">
                                <li class="list-group-item">Perform reliable examinations</li>
                                <li class="list-group-item">Provide objective, complete, and scientifically accurate reports to the requesters</li>
                                <li class="list-group-item">Timely completion of examinations results</li>
                            </ul>
                        </p>
                    </li>
                </ul>
            </section>
            <section class="mt-5" id="services">
                <h1>Services</h1>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2>Hematology</h2>
                        <ul class="list-group">
                            <li class="list-group-item">CBC</li>
                            <li class="list-group-item">Platelet Count</li>
                            <li class="list-group-item">Hemoglobin/Hematocrit</li>
                            <li class="list-group-item">PROTIME/INR</li>
                            <li class="list-group-item">APTT</li>
                            <li class="list-group-item">Clotting Time/Bleeding Time</li>
                            <li class="list-group-item">ESR</li>
                            <li class="list-group-item">Peripheral Blood Smear</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h2>Clinical Chemistry</h2>
                        <ul class="list-group">
                            <li class="list-group-item">FBS/RBS</li>
                            <li class="list-group-item">Uric Acid</li>
                            <li class="list-group-item">Creatinine</li>
                            <li class="list-group-item">Blood Urea Nitrogen</li>
                            <li class="list-group-item">ALT</li>
                            <li class="list-group-item">AST</li>
                            <li class="list-group-item">HbA1c</li>
                            <li class="list-group-item">Na, K, Ca, Mg</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h2>Serology</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Pregnancy Test</li>
                            <li class="list-group-item">Salmonella IgG/IgM</li>
                            <li class="list-group-item">Hepatitis B Surface Antigen</li>
                            <li class="list-group-item">ABO/Rh Typing</li>
                            <li class="list-group-item">VDRL</li>
                            <li class="list-group-item">Ns1/Dengue Duo</li>
                            <li class="list-group-item">Anti-HAV</li>
                            <li class="list-group-item">H. Pylori</li>
                            <li class="list-group-item">T3, T4, TSH</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h2>Clinical Microscopy</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Routine Urinalysis</li>
                            <li class="list-group-item">Routine Fecalysis</li>
                            <li class="list-group-item">Sperm Count</li>
                            <li class="list-group-item">Fecal Occult Blood</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h2>Bacteriology</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Gram Staining</li>
                            <li class="list-group-item">KOH</li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <h2>Histopathology</h2>
                        <ul class="list-group">
                            <li class="list-group-item">PAP SMEAR</li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="mt-5" id="organization">
                <h1>Organization Chart</h1>
                <img src="{{URL::asset('img/org-chart.jpg')}}" alt="Organizational Chart">
            </section>
        </div>
        <footer class="mt-5" id="custom-footer">
            <div class="container text-white">
                <div class="row">
                    <div class="col">
                        <section id="contact-us">
                            <h1>Contact Us</h1>
                            <p>
                                <b>Contact Number: </b>09123456789<br>
                                <b>Telephone Number: </b>(036) 620 5234<br>
                                <b>Email: </b>stlouisedemarillac@gmail.com
                            </p>
                        </section>
                    </div>
                    <div class="col" id="custom-copyright">
                        <p>
                            &copy; All Rights Reserved. 2022<br>
                            St. Louise de Marillac Clinics and Laboratory
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>