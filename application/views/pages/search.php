<!doctype html>
<html>

<head>
    <title>Search — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header'); ?>
    <main common search>


        <section id="srch">
            <div class="contain-fluid">
                <div class="flexRow flex">
                    <div class="col col1">
                        <div class="filters">
                            <div class="closeBtn"></div>
                            <form method="post" id="searchForm">
                                <h5>Filter by <button type="reset">Reset all</button></h5>
                                <div class="inBlk">
                                    <h6>Profile Type</h6>
                                    <ul class="ctgLst inline">
                                        <li>
                                            <input type="radio" id="typeRegular" name="profile_type" value="regular" checked>
                                            <label for="typeRegular">Regular</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="typeVoiceover" name="profile_type" value="voiceover">
                                            <label for="typeVoiceover">Voiceover</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Search by Name</h6>
                                    <div class="txtGrp">
                                        <label for="">Type Model Name</label>
                                        <input type="text" name="model_name" id="model_name" class="txtBox">
                                    </div>
                                </div>
                                <div class="inBlk">
                                    <h6>Location <button type="reset">Clear</button></h6>
                                    <div class="txtGrp">
                                        <label for="">Zip code or Address</label>
                                        <input type="text" name="zip" id="zip" class="txtBox">
                                    </div>
                                </div>
                                <div class="inBlk">
                                    <h6>Age Range</h6>
                                    <input type="text" name="age" id="age" value="">
                                </div>
                                <div class="inBlk">
                                    <h6>Distance (miles)</h6>
                                    <input type="text" name="distance" id="distance" value="">
                                </div>
                                <div class="inBlk">
                                    <h6>Gender <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst">
                                    <?php foreach(genders() as $key => $val): ?>
                                        <li>
                                            <input class="clicked" type="checkbox" id="gender<?=$key?>" name="gender[]" value="<?=$val?>">
                                            <label for="gender<?=$key?>"><?=$val?></label>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Rating <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst ratingLst">
                                        <li>
                                            <input type="radio" id="star_four_five" name="star_rating" value="4.5">
                                            <div class="rateYo" data-rateyo-rating="4.5" data-rateyo-star-width="16px"></div>
                                            <label for="star_four_five">4.5 & up</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="star_four" name="star_rating" value="4">
                                            <div class="rateYo" data-rateyo-rating="4" data-rateyo-star-width="16px"></div>
                                            <label for="star_four">4.0 & up</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="star_three_five" name="star_rating" value="3.5">
                                            <div class="rateYo" data-rateyo-rating="3.5" data-rateyo-star-width="16px"></div>
                                            <label for="star_three_five">3.5 & up</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="star_three" name="star_rating" value="3">
                                            <div class="rateYo" data-rateyo-rating="3" data-rateyo-star-width="16px"></div>
                                            <label for="star_three">3.0 & up</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Language <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                    <?php foreach(languages() as $language): ?>
                                        <li>
                                            <input class="clicked" type="checkbox" id="language<?=$language->name?>" name="language[]" value="<?=$language->id?>">
                                            <label for="language<?=$language->name?>"><?=$language->name?></label>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Personal <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst">
                                        <li>
                                            <input  type="checkbox" id="personalPassport" name="personal[]">
                                            <label for="personalPassport">Has Passport</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="personalLicense" name="personal[]">
                                            <label for="personalLicense">Has Driver's License</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="personalRecord" name="personal[]">
                                            <label for="personalRecord">Self-record</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Available Assets <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst">
                                        <li>
                                            <input type="checkbox" id="assetsHeadshot" name="assets">
                                            <label for="assetsHeadshot">Headshot/Photo</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="assetsVideo" name="assets">
                                            <label for="assetsVideo">Video Reel</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="assetsAudio" name="assets">
                                            <label for="assetsAudio">Audio Reel</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="assetsDocument" name="assets">
                                            <label for="assetsDocument">Document</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Ethnicity <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                    <?php foreach(ethnicity() as $key => $val): ?>
                                        <li>
                                            <input class="clicked" type="checkbox" id="ethnicity<?=$key?>" name="ethnicity[]" value="<?=$val?>">
                                            <label for="ethnicity<?=$key?>"><?=$val?></label>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Hair Color <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                    <?php foreach(hair_colors() as $key => $val): ?>
                                        <li>
                                            <input class="clicked" type="checkbox" id="hair<?=$key?>" name="hair[]" value="<?=$val?>">
                                            <label for="hair<?=$key?>"><?=$val?></label>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Eye Color <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                    <?php foreach(eye_colors() as $key => $val): ?>
                                        <li>
                                            <input class="clicked" type="checkbox" id="eye<?=$key?>" name="eye[]" value="<?=$val?>">
                                            <label for="eye<?=$key?>"><?=$val?></label>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Body Type <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                    <?php foreach(body_types() as $key => $val): ?>
                                        <li>
                                            <input class="clicked" type="checkbox" id="body<?=$key?>" name="body_type[]" value="<?=$val?>">
                                            <label for="body<?=$key?>"><?=$val?></label>
                                        </li>
                                    <?php endforeach; ?>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Height Range</h6>
                                    <input type="text" name="height" id="height" value="">
                                </div>
                                <div class="btnBlk">
                                    <button type="reset" class="webBtn lgBtn lightBtn borderBtn">Clear</button>
                                    <button type="submit" class="webBtn lgBtn">Apply</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col col2">
                        <div class="head">
                            <h1 class="heading">Search</h1>
                            <button type="button" id="filterBtn" class="webBtn smBtn icoBtn"><img src="<?= base_url() ?>assets/images/icon-filter.svg" alt=""> Filter</button>
                        </div>
                        <div class="topHead">
                            <span id="total_records">125 Results available</span>
                            <div class="miniBtn">
                                Sort by
                                <select name="" id="" class="txtBox">
                                    <option value="0">Relevance</option>
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                        <div class="flexRow flex" id="model_records">
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/1.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/2.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/3.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                                        <p>Thomas Frank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/4.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Real Productivity: How to Build Habits That Last</a></h4>
                                        <p>Gia Graham</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/5.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Hand Lettering in Procreate: Fundamentals to Finishing Touches</a></h4>
                                        <p>Sean Dalton</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/6.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Customizing Type with Draplin: Creating Wordmarks That Work</a></h4>
                                        <p>Aaron Draplin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/7.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/8.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/9.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                                        <p>Thomas Frank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/10.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Real Productivity: How to Build Habits That Last</a></h4>
                                        <p>Gia Graham</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/1.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/2.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/3.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                                        <p>Thomas Frank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/4.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Real Productivity: How to Build Habits That Last</a></h4>
                                        <p>Gia Graham</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/5.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Hand Lettering in Procreate: Fundamentals to Finishing Touches</a></h4>
                                        <p>Sean Dalton</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/6.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Customizing Type with Draplin: Creating Wordmarks That Work</a></h4>
                                        <p>Aaron Draplin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/7.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= base_url() ?>assets/images/stars/8.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- srch -->


        <!-- Ion Slider -->
        <link type="text/css" rel="stylesheet" href="<?= base_url() ?>assets/css/ion.slider.min.css">
        <script type="text/javascript" src="<?= base_url() ?>assets/js/ion.slider.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/ion.slider.skins.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#age').ionRangeSlider({
                    skin: 'square',
                    min: 1,
                    max: 100,
                    type: 'double',
                    // prettify: function(num) {
                    //     return '$' + num;
                    // },
                    onFinish: function(data) {
                        // searchFunction();
                    },
                    grid: true
                });
                $('#distance').ionRangeSlider({
                    skin: 'square',
                    min: 1,
                    max: 50,
                    type: 'double',
                    // prettify: function(num) {
                    //     return '$' + num;
                    // },
                    onFinish: function(data) {
                        // searchFunction();
                    },
                    grid: true
                });
                $('#height').ionRangeSlider({
                    skin: 'square',
                    min: 2,
                    max: 8,
                    type: 'double',
                    // prettify: function(num) {
                    //     return '$' + num;
                    // },
                    onFinish: function(data) {
                        // searchFunction();
                    },
                    grid: true
                });

                $(document).on('click', '#filterBtn', function() {
                    $('.filters').addClass('active');
                });
                $(document).on('click', '.filters .closeBtn', function() {
                    $('.filters').removeClass('active');
                });
                $(document).on('click', '.filters .moreLst + .webBtn', function() {
                    $(this).prev(":first").toggleClass('change');
                });

                // SEARCH REQUEST DETECTIONS BLOCK
                $(document).on('keyup', '#model_name, #zip', function(e) 
                {
                    e.preventDefault();
                    search();
                });

                $(document).on('change', '#age, #distance, #height', function(e) 
                {
                    e.preventDefault();
                    search();
                });

                $(document).on('click', '.clicked, input[name="star_rating"]', function(e) 
                {
                    e.preventDefault();
                    search();
                });


                var xhr = new window.XMLHttpRequest();
                var ajaxSearch = false;
                function search() 
                {
                    if(xhr && xhr.readyState != 4) {
                        xhr.abort();
                    }
                    if(ajaxSearch)
                        return;
                    ajaxSearch = true;
                    let formData = $("#searchForm").serializeArray();
                    $.ajax({
                        url: base_url + 'search',
                        type: "POST",
                        data: $.param(formData),
                        success: function (rs) {
                            let data = JSON.parse(rs);
                            $('#model_records').html(data.html);
                            if(data.total < 2)
                                $('#total_records').html(`${data.total} result Available`);
                            else
                                $('#total_records').html(`${data.total} results Available`);
                        },
                        error: function (data) {
                            console.log(data);
                        },
                        complete: function (data) {
                            ajaxSearch = false;
                        },
                        xhr : function(){
                            return xhr;
                        }
                    }); 
                }
                // END SEARCH BLOCK
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>