<?php
    $enroll_link = "#";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Bridge International</title>
    <link rel="icon" href="{{ asset('img/logo/lbi.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- MDBOOTSTRAP -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet"/>
    
</head>
<body>

    <!-- Navigation Bar -->
    @include ('static/nav');

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-mdb-ride="carousel">
        <div class="carousel-indicators carousel_ind">
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="6" aria-label="Slide 7"></button>
        </div>
        
        <div class="carousel-inner rounded-5 shadow-4-strong">
            <div class="carousel-item active header_carousel">
                <img src="{{ asset('img/carousel/conversation.jpg') }}" class="d-block w-100" alt="Conversation" />
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Conversation</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>

            <div class="carousel-item header_carousel">
                <img src="{{ asset('img/carousel/grammar.jpg') }}" class="d-block w-100" alt="Grammar"/>
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Grammar</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>

            <div class="carousel-item header_carousel">
                <img src="{{ asset('img/carousel/pronunciation.jpg') }}" class="d-block w-100" alt="Pronunciation"/>
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Pronunciation</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>

            <div class="carousel-item header_carousel">
                <img src="{{ asset('img/carousel/reading_compre.jpg') }}" class="d-block w-100" alt="Reading Comprehention"/>
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Reading Comprehention</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>

            <div class="carousel-item header_carousel">
                <img src="{{ asset('img/carousel/speaking.jpg') }}" class="d-block w-100" alt="Speaking"/>
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Speaking</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>

            <div class="carousel-item header_carousel">
                <img src="{{ asset('img/carousel/vocabulary.jpg') }}" class="d-block w-100" alt="Vocabulary"/>
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Vocabulary</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>

            <div class="carousel-item header_carousel">
                <img src="{{ asset('img/carousel/writing.jpg') }}" class="d-block w-100" alt="Writing"/>
                <div class="carousel-caption d-none d-md-block carousel_text">
                    <h5>Writing</h5>
                    <a href="<?php echo $enroll_link; ?>" class="btn btn-danger enroll_btn">Enroll Now!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mission and Vision -->
    <div class="mv_section" id="mv">
        <div class="container text-center">
            <div class="section_header">
                <h1>Our Mission and Vision</h1>
            </div>

            <div class="row">
                <div class="col-md-7 section_content">
                    <h3>Mission</h3>
                    <p>
                        We believe that a happy child is a successful one. 
                        We are committed to providing a positive, safe and 
                        stimulating environment for children to learn, 
                        where all are valued. We intend that all children 
                        should enjoy their learning, achieve their potential 
                        and become independent life-long learners.
                    </p>
                </div>
                <div class="col-md-5">
                    <div class="photo_container">
                        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="photo_container">
                        
                    </div>
                </div>
                <div class="col-md-7 section_content">
                    <h3>Vision</h3>
                    <p>
                        Our Vision is a community where all children feel loved, 
                        respected and encouraged to develop to their fullest potential.
                        We aim to encourage each child to be independent and develop a 
                        sense of responsibility for themselves and respect for others in the environment.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Classes -->
    <div class="classes_sec" id="classes">
        <div class="container">
            <div class="slashed_header slashed_sec_header text-center">
                <h1>Classes</h1>
            </div>

            <hr class="hr hr-blurry" />

            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-fill mb-3 class_tabs" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link active"
                        id="reading-comprehension"
                        data-mdb-toggle="tab"
                        href="#reading-compre"
                        role="tab"
                        aria-controls="reading-compre"
                        aria-selected="true"
                    >Reading Comprehension</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="speaking-conversation"
                        data-mdb-toggle="tab"
                        href="#speaking-conver"
                        role="tab"
                        aria-controls="speaking-conver"
                        aria-selected="false"
                    >Speaking</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="writing"
                        data-mdb-toggle="tab"
                        href="#writing-tab"
                        role="tab"
                        aria-controls="writing-tab"
                        aria-selected="false"
                    >Writing</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="listening"
                        data-mdb-toggle="tab"
                        href="#listening-tab"
                        role="tab"
                        aria-controls="listening-tab"
                        aria-selected="false"
                    >Listening</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="grammar"
                        data-mdb-toggle="tab"
                        href="#grammar-tab"
                        role="tab"
                        aria-controls="grammar-tab"
                        aria-selected="false"
                    >Grammar</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="pronunciation"
                        data-mdb-toggle="tab"
                        href="#pronunciation-tab"
                        role="tab"
                        aria-controls="pronunciation-tab"
                        aria-selected="false"
                    >Pronunciation</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="Phonics"
                        data-mdb-toggle="tab"
                        href="#phonics-tab"
                        role="tab"
                        aria-controls="phonics-tab"
                        aria-selected="false"
                    >Phonics</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="vocabulary"
                        data-mdb-toggle="tab"
                        href="#vocabulary-tab"
                        role="tab"
                        aria-controls="vocabulary-tab"
                        aria-selected="false"
                    >Vocabulary</a
                    >
                </li>

                <li class="nav-item" role="presentation">
                    <a
                        class="nav-link"
                        id="business-class"
                        data-mdb-toggle="tab"
                        href="#business-tab"
                        role="tab"
                        aria-controls="business-tab"
                        aria-selected="false"
                    >Business Class</a
                    >
                </li>
            </ul>

            <!-- Contents -->
            <div class="tab-content" id="ex2-content">
                <div
                    class="tab-pane fade show active"
                    id="reading-compre"
                    role="tabpanel"
                    aria-labelledby="reading-comprehension"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Reading Comprehension</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Reading Comprehension"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="speaking-conver"
                    role="tabpanel"
                    aria-labelledby="speaking-conversation"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Speaking/Conversation</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Speaking/Conversation"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="writing-tab"
                    role="tabpanel"
                    aria-labelledby="writing"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Writing</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Writing"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="listening-tab"
                    role="tabpanel"
                    aria-labelledby="listening"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Listening</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Listening"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="grammar-tab"
                    role="tabpanel"
                    aria-labelledby="grammar"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Grammar</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Grammar"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="pronunciation-tab"
                    role="tabpanel"
                    aria-labelledby="pronunciation"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Pronunciation</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Pronunciation"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="phonics-tab"
                    role="tabpanel"
                    aria-labelledby="phonics"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Phonics</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Phonics"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="vocabulary-tab"
                    role="tabpanel"
                    aria-labelledby="vocabulary"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Vocabulary</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Vocabulary"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>

                <div
                    class="tab-pane fade"
                    id="business-tab"
                    role="tabpanel"
                    aria-labelledby="business"
                >
                    <div class="row">
                        <div class="class_row">
                            <h3>Business Class</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit enim repellat cum, eos quaerat in.</p>
                        </div>

                        <div class="ratio ratio-21x9">
                            <iframe
                                src="https://www.youtube.com/embed/2e5dDI24tsI"
                                title="Business Class"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Materials Section -->
    <div class="materials_sec" id="materials">
        <div class="container">
            <div class="section_header text-center">
                <h1>Materials Section</h1>
            </div>
            <hr class="hr hr-blurry" />

            <div class="row cards_row">
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/reading.jpg') }}" class="card-img-top" alt="Reading Comprehension"/>
                        <div class="card-body">
                            <h5 class="card-title">Reading Comprehension</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/speaking.jpg') }}" class="card-img-top" alt="Speaking"/>
                        <div class="card-body">
                            <h5 class="card-title">Speaking</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/writing.jpg') }}" class="card-img-top" alt="Writing"/>
                        <div class="card-body">
                            <h5 class="card-title">Writing</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/grammar.jpg') }}" class="card-img-top" alt="Grammar"/>
                        <div class="card-body">
                            <h5 class="card-title">Grammar</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="hr hr-blurry"/>

            <div class="row cards_row">
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/reading.jpg') }}" class="card-img-top" alt="Pronunciation"/>
                        <div class="card-body">
                            <h5 class="card-title">Pronunciation</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/speaking.jpg') }}" class="card-img-top" alt="Conversation"/>
                        <div class="card-body">
                            <h5 class="card-title">Conversation</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/writing.jpg') }}" class="card-img-top" alt="Vocabulary"/>
                        <div class="card-body">
                            <h5 class="card-title">Vocabulary</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
                <div class="col cards_sec">
                    <div class="card">
                        <img src="{{ asset('img/materials/grammar.jpg') }}" class="card-img-top" alt="Business Book"/>
                        <div class="card-body">
                            <h5 class="card-title">Business Book</h5>
                            <p class="card-text">Some quick example text to build on the book title and make up the bulk of the book's content.</p>
                            <a href="#!" class="btn btn-primary">View Book</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Class Fee -->
    <div class="class_fee_sec" id="class_fee">
        <div class="container">
            <div class="slashed_header slashed_sec_header text-center">
                <h1>Class Fee</h1>
            </div>
            <hr class="hr hr-blurry" />

            <div class="row">
                <div class="col">
                    <div class="pricing_cards shadow-3-strong">
                        <div class="pricing_title text-center">
                            <h4>Basic Class</h4>
                            <h5>10$ per Student</h5>
                            <hr class="hr hr-blurry" />
                        </div>

                        <div class="class_features">
                            <ul>
                                <li>
                                    <p>Feature 1</p>
                                </li>
                                <li>
                                    <p>Feature 2</p>
                                </li>
                                <li>
                                    <p>Feature 3</p>
                                </li>
                                <li>
                                    <p>Feature 4</p>
                                </li>
                                <li>
                                    <p>Feature 5</p>
                                </li>
                                <li>
                                    <p>Feature 6</p>
                                </li>
                            </ul>

                            <div class="enroll_btn">
                                <a href="#" class="btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="pricing_cards shadow-3-strong">
                        <div class="pricing_title text-center">
                            <h4>Group Class</h4>
                            <h5>5$ per Student</h5>
                            <hr class="hr hr-blurry" />
                        </div>

                        <div class="class_features">
                            <ul>
                                <li>
                                    <p>Feature 1</p>
                                </li>
                                <li>
                                    <p>Feature 2</p>
                                </li>
                                <li>
                                    <p>Feature 3</p>
                                </li>
                                <li>
                                    <p>Feature 4</p>
                                </li>
                                <li>
                                    <p>Feature 5</p>
                                </li>
                                <li>
                                    <p>Feature 6</p>
                                </li>
                            </ul>

                            <div class="enroll_btn">
                                <a href="#" class="btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="pricing_cards shadow-3-strong">
                        <div class="pricing_title text-center">
                            <h4>25 minutes class</h4>
                            <h5>10$ per Student</h5>
                            <hr class="hr hr-blurry" />
                        </div>

                        <div class="class_features">
                            <ul>
                                <li>
                                    <p>Feature 1</p>
                                </li>
                                <li>
                                    <p>Feature 2</p>
                                </li>
                                <li>
                                    <p>Feature 3</p>
                                </li>
                                <li>
                                    <p>Feature 4</p>
                                </li>
                                <li>
                                    <p>Feature 5</p>
                                </li>
                                <li>
                                    <p>Feature 6</p>
                                </li>
                            </ul>

                            <div class="enroll_btn">
                                <a href="#" class="btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="pricing_cards shadow-3-strong">
                        <div class="pricing_title text-center">
                            <h4>50 minutes class</h4>
                            <h5>20$ per Student</h5>
                            <hr class="hr hr-blurry" />
                        </div>

                        <div class="class_features">
                            <ul>
                                <li>
                                    <p>Feature 1</p>
                                </li>
                                <li>
                                    <p>Feature 2</p>
                                </li>
                                <li>
                                    <p>Feature 3</p>
                                </li>
                                <li>
                                    <p>Feature 4</p>
                                </li>
                                <li>
                                    <p>Feature 5</p>
                                </li>
                                <li>
                                    <p>Feature 6</p>
                                </li>
                            </ul>

                            <div class="enroll_btn">
                                <a href="#" class="btn">Enroll Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bulletin Section -->
    <div class="bulletin_sec" id="bulletin">
        <div class="container">
            <div class="section_header text-center">
                <h1>Bulletin</h1>
            </div>
            <hr class="hr hr-blurry" />


        </div>
    </div>

    <!-- Teachers Profile -->
    <div class="teacher_profile" id="t_prof">
        <div class="container">
            <div class="section_header text-center">
                <h1>Teachers Profile</h1>
            </div>
            <hr class="hr hr-blurry" />

            <div class="row g-0">
                <div class="col-md-7 video_container">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.youtube.com/embed/2e5dDI24tsI"
                            title="YouTube video"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>

                <div class="col-md-5 t_prof">
                    <div class="card-body">
                        <h5 class="card-title">Teacher Name</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Quidem vel nulla quae, mollitia dolorem sit, quos excepturi 
                            eaque amet deserunt debitis consequuntur tempore nam hic laborum 
                            voluptatum praesentium et. Inventore?
                        </p>
                        <p class="card-text">
                            <small class="text-muted">English, Vocabulary, Grammar</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    @include ('static/footer');

    


    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
</body>
</html>