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
                            <form action="" method="post">
                                <h5>Filter by <button type="reset">Reset all</button></h5>
                                <div class="inBlk">
                                    <h6>Profile Type</h6>
                                    <ul class="ctgLst inline">
                                        <li>
                                            <input type="radio" id="typeRegular" name="type" checked="">
                                            <label for="typeRegular">Regular</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="typeVoiceover" name="type">
                                            <label for="typeVoiceover">Voiceover</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Search by Name</h6>
                                    <div class="txtGrp">
                                        <label for="">Type Model Name</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="inBlk">
                                    <h6>Location <button type="reset">Clear</button></h6>
                                    <div class="txtGrp">
                                        <label for="">Zip code or Address</label>
                                        <input type="text" name="" id="" class="txtBox">
                                    </div>
                                </div>
                                <div class="inBlk">
                                    <h6>Age Range</h6>
                                    <input type="text" name="" id="age" value="">
                                </div>
                                <div class="inBlk">
                                    <h6>Distance (miles)</h6>
                                    <input type="text" name="" id="distance" value="">
                                </div>
                                <div class="inBlk">
                                    <h6>Gender <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst">
                                        <li>
                                            <input type="checkbox" id="genderFemale" name="gender">
                                            <label for="genderFemale">Female</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="genderMale" name="gender">
                                            <label for="genderMale">Male</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="genderNonConfirm" name="gender">
                                            <label for="genderNonConfirm">Non-Confirming</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="genderNonBinary" name="gender">
                                            <label for="genderNonBinary">Non-Binary</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="genderTransFemale" name="gender">
                                            <label for="genderTransFemale">Trans Female</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="genderTransMale" name="gender">
                                            <label for="genderTransMale">Trans Male</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Rating <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst ratingLst">
                                        <li>
                                            <input type="radio" id="star_four_five" name="star_rating">
                                            <div class="rateYo" data-rateyo-rating="4.5" data-rateyo-star-width="16px"></div>
                                            <label for="star_four_five">4.5 & up</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="star_four" name="star_rating">
                                            <div class="rateYo" data-rateyo-rating="4" data-rateyo-star-width="16px"></div>
                                            <label for="star_four">4.0 & up</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="star_three_five" name="star_rating">
                                            <div class="rateYo" data-rateyo-rating="3.5" data-rateyo-star-width="16px"></div>
                                            <label for="star_three_five">3.5 & up</label>
                                        </li>
                                        <li>
                                            <input type="radio" id="star_three" name="star_rating">
                                            <div class="rateYo" data-rateyo-rating="3" data-rateyo-star-width="16px"></div>
                                            <label for="star_three">3.0 & up</label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="inBlk">
                                    <h6>Language <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                        <li>
                                            <input type="checkbox" id="languageEnglish" name="language">
                                            <label for="languageEnglish">English</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languagePortuguês" name="language">
                                            <label for="languagePortuguês">Português</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageEspañol" name="language">
                                            <label for="languageEspañol">Español</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageFrançais" name="language">
                                            <label for="languageFrançais">Français</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageالعربية" name="language">
                                            <label for="languageالعربية">العربية</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageItaliano" name="language">
                                            <label for="languageItaliano">Italiano</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="language日本語" name="language">
                                            <label for="language日本語">日本語</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageاردو" name="language">
                                            <label for="languageاردو">اردو</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageภาษาไทย" name="language">
                                            <label for="languageภาษาไทย">ภาษาไทย</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="languageKhmer" name="language">
                                            <label for="languageKhmer">Khmer</label>
                                        </li>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Personal <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst">
                                        <li>
                                            <input type="checkbox" id="personalPassport" name="personal">
                                            <label for="personalPassport">Has Passport</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="personalLicense" name="personal">
                                            <label for="personalLicense">Has Driver's License</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="personalRecord" name="personal">
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
                                        <li>
                                            <input type="checkbox" id="ethnicityAsian" name="ethnicity">
                                            <label for="ethnicityAsian">Asian</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicityBlack" name="ethnicity">
                                            <label for="ethnicityBlack">Black / African Descent</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicityEthnically" name="ethnicity">
                                            <label for="ethnicityEthnically">Ethnically Ambiguous / Multiracial</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicityIndigenous" name="ethnicity">
                                            <label for="ethnicityIndigenous">Indigenous Peoples</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicityLatino" name="ethnicity">
                                            <label for="ethnicityLatino">Latino / Hispanic</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicityMiddle" name="ethnicity">
                                            <label for="ethnicityMiddle">Middle Eastern</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicitySouth" name="ethnicity">
                                            <label for="ethnicitySouth">South Asian / Indian</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicitySoutheast" name="ethnicity">
                                            <label for="ethnicitySoutheast">Southeast Asian / Pacific Islander</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="ethnicityWhite" name="ethnicity">
                                            <label for="ethnicityWhite">White / European Descent</label>
                                        </li>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Hair Color <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                        <li>
                                            <input type="checkbox" id="hairBlack" name="hair">
                                            <label for="hairBlack">Black</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairBrown" name="hair">
                                            <label for="hairBrown">Brown</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairBlond" name="hair">
                                            <label for="hairBlond">Blond</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairAuburn" name="hair">
                                            <label for="hairAuburn">Auburn</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairChestnut" name="hair">
                                            <label for="hairChestnut">Chestnut</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairRed" name="hair">
                                            <label for="hairRed">Red</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairGray" name="hair">
                                            <label for="hairGray">Gray</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairWhite" name="hair">
                                            <label for="hairWhite">White</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairBald" name="hair">
                                            <label for="hairBald">Bald</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairSalt" name="hair">
                                            <label for="hairSalt">Salt & Pepper</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairStrawberry" name="hair">
                                            <label for="hairStrawberry">Strawberry Blond</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="hairMulticolored" name="hair">
                                            <label for="hairMulticolored">Multicolored/Dyed</label>
                                        </li>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Eye Color <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                        <li>
                                            <input type="checkbox" id="eyeAmber" name="eye">
                                            <label for="eyeAmber">Amber</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeBlue" name="eye">
                                            <label for="eyeBlue">Blue</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeBrown" name="eye">
                                            <label for="eyeBrown">Brown</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeGray" name="eye">
                                            <label for="eyeGray">Gray</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeGreen" name="eye">
                                            <label for="eyeGreen">Green</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeHazel" name="eye">
                                            <label for="eyeHazel">Hazel</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeRed" name="eye">
                                            <label for="eyeRed">Red</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="eyeViolet" name="eye">
                                            <label for="eyeViolet">Violet</label>
                                        </li>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Body Type <button type="reset">Clear</button></h6>
                                    <ul class="ctgLst moreLst">
                                        <li>
                                            <input type="checkbox" id="bodyAverage" name="body">
                                            <label for="bodyAverage">Average</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bodySlim" name="body">
                                            <label for="bodySlim">Slim</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bodyAthletic" name="body">
                                            <label for="bodyAthletic">Athletic / Toned</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bodyMuscular" name="body">
                                            <label for="bodyMuscular">Muscular</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bodyCurvy" name="body">
                                            <label for="bodyCurvy">Curvy</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bodyHeavyset" name="body">
                                            <label for="bodyHeavyset">Heavyset / Stocky</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bodyPlus" name="body">
                                            <label for="bodyPlus">Plus-Sized / Full-Figured</label>
                                        </li>
                                    </ul>
                                    <button type="button" class="webBtn labelBtn" data-more="Show more" data-less="Show less"></button>
                                </div>
                                <div class="inBlk">
                                    <h6>Height Range</h6>
                                    <input type="text" name="" id="height" value="">
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
                            <button type="button" id="filterBtn" class="webBtn smBtn icoBtn"><img src="<?= $base_url ?>images/icon-filter.svg" alt=""> Filter</button>
                        </div>
                        <div class="topHead">
                            <span>125 Results available</span>
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
                        <div class="flexRow flex">
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/1.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/2.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/3.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                                        <p>Thomas Frank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/4.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Real Productivity: How to Build Habits That Last</a></h4>
                                        <p>Gia Graham</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/5.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Hand Lettering in Procreate: Fundamentals to Finishing Touches</a></h4>
                                        <p>Sean Dalton</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/6.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Customizing Type with Draplin: Creating Wordmarks That Work</a></h4>
                                        <p>Aaron Draplin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/7.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/8.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/9.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                                        <p>Thomas Frank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/10.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Real Productivity: How to Build Habits That Last</a></h4>
                                        <p>Gia Graham</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/1.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/2.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Art Journaling for Self-Care: 3 Exercises for Reflection and Growth</a></h4>
                                        <p>Amanda Rach Lee</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/3.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Still Life Photography: Capturing Stories of Everyday Objects at Home</a></h4>
                                        <p>Thomas Frank</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/4.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Real Productivity: How to Build Habits That Last</a></h4>
                                        <p>Gia Graham</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/5.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Hand Lettering in Procreate: Fundamentals to Finishing Touches</a></h4>
                                        <p>Sean Dalton</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/6.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Customizing Type with Draplin: Creating Wordmarks That Work</a></h4>
                                        <p>Aaron Draplin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/7.jpg" alt=""></a></div>
                                    <div class="txt">
                                        <div class="rateYo"></div>
                                        <h4><a href="<?= $base_url ?>profile.php">Unlocking Your Potential: 5 Exercises to Build Creative Confidence</a></h4>
                                        <p>Emma Gannon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="profBlk">
                                    <div class="image"><a href="<?= $base_url ?>profile.php"><img src="<?= $base_url ?>images/stars/8.jpg" alt=""></a></div>
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
        <link type="text/css" rel="stylesheet" href="<?= $base_url ?>css/ion.slider.min.css">
        <script type="text/javascript" src="<?= $base_url ?>js/ion.slider.min.js"></script>
        <script type="text/javascript" src="<?= $base_url ?>js/ion.slider.skins.js"></script>
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
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>