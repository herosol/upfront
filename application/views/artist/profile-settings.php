<!doctype html>
<html>

<head>
    <title>Profile Settings — Upfront Worldwide Talent Agency</title>
    <?php $this->load->view('includes/site-master'); ?>
</head>

<body id="home-page">
    <?php $this->load->view('includes/header-artist'); ?>
    <main formal dash>
        <?php $this->load->view('includes/sidebar-artist'); ?>


        <section id="setting">
            <div class="contain-fluid">
                <form action="" method="post">
                    <div class="blk">
                        <div class="upLoadCover" style="background-image: url('<?= base_url() ?>assets/images/portfolio-01.jpg');">
                            <div class="text-center">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="cover_image" data-text="Change Cover"></button>
                                <input type="file" name="" id="" class="uploadFile" data-upload="cover_image">
                            </div>
                        </div>
                        <div class="upLoadDp">
                            <div class="ico">
                                <img src="<?= base_url() ?>assets/images/stars/3.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <button type="button" class="webBtn smBtn uploadImg" data-upload="dp_image" data-text="Change Photo"></button>
                                <input type="file" name="" id="" class="uploadFile" data-upload="dp_image">
                            </div>
                            <div class="noHats text-center">(Please upload your photo)</div>
                        </div>
                        <hr>
                        <h5>Personal Information</h5>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">First Name</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Last Name</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Email Address</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Date of birth</label>
                                    <input type="text" name="" id="" class="txtBox datepicker">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Gender</label>
                                    <select name="" id="" class="txtBox">
                                        <option>Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Address Information</h5>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Country</label>
                                    <select name="" id="" class="txtBox">
                                        <option>Select</option>
                                        <option value="London">London</option>
                                        <option value="Birmingham">Birmingham</option>
                                        <option value="Leeds">Leeds</option>
                                        <option value="Glasgow">Glasgow</option>
                                        <option value="Sheffield">Sheffield</option>
                                        <option value="Bradford">Bradford</option>
                                        <option value="Liverpool">Liverpool</option>
                                        <option value="Edinburgh">Edinburgh</option>
                                        <option value="Manchester">Manchester</option>
                                        <option value="Bristol">Bristol</option>
                                        <option value="Kirklees">Kirklees</option>
                                        <option value="Fife">Fife</option>
                                        <option value="Wirral">Wirral</option>
                                        <option value="North Lanarkshire">North Lanarkshire</option>
                                        <option value="Wakefield">Wakefield</option>
                                        <option value="Cardiff">Cardiff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">City</label>
                                    <input type="text" name="" id="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">State</label>
                                    <select name="" id="" class="txtBox">
                                        <option>Select</option>
                                        <option value="AL">Alabama - AL</option>
                                        <option value="AK">Alaska - AK</option>
                                        <option value="AS">American Samoa - AS</option>
                                        <option value="AZ">Arizona - AZ</option>
                                        <option value="AR">Arkansas - AR</option>
                                        <option value="CA">California - CA</option>
                                        <option value="CO">Colorado - CO</option>
                                        <option value="CT">Connecticut - CT</option>
                                        <option value="DE">Delaware - DE</option>
                                        <option value="DC">District of Columbia - DC</option>
                                        <option value="FM">Federated States of Micronesia - FM</option>
                                        <option value="FL">Florida - FL</option>
                                        <option value="GA">Georgia - GA</option>
                                        <option value="GU">Guam - GU</option>
                                        <option value="HI">Hawaii - HI</option>
                                        <option value="ID">Idaho - ID</option>
                                        <option value="IL">Illinois - IL</option>
                                        <option value="IN">Indiana - IN</option>
                                        <option value="IA">Iowa - IA</option>
                                        <option value="KS">Kansas - KS</option>
                                        <option value="KY">Kentucky - KY</option>
                                        <option value="LA">Louisiana - LA</option>
                                        <option value="ME">Maine - ME</option>
                                        <option value="MH">Marshall Islands - MH</option>
                                        <option value="MD">Maryland - MD</option>
                                        <option value="MA">Massachusetts - MA</option>
                                        <option value="MI">Michigan - MI</option>
                                        <option value="MN">Minnesota - MN</option>
                                        <option value="MS">Mississippi - MS</option>
                                        <option value="MO">Missouri - MO</option>
                                        <option value="MT">Montana - MT</option>
                                        <option value="NE">Nebraska - NE</option>
                                        <option value="NV">Nevada - NV</option>
                                        <option value="NH">New Hampshire - NH</option>
                                        <option value="NJ">New Jersey - NJ</option>
                                        <option value="NM">New Mexico - NM</option>
                                        <option value="NY">New York - NY</option>
                                        <option value="NC">North Carolina - NC</option>
                                        <option value="ND">North Dakota - ND</option>
                                        <option value="MP">Northern Mariana Islands - MP</option>
                                        <option value="OH">Ohio - OH</option>
                                        <option value="OK">Oklahoma - OK</option>
                                        <option value="OR">Oregon - OR</option>
                                        <option value="PW">Palau - PW</option>
                                        <option value="PA">Pennsylvania - PA</option>
                                        <option value="PR">Puerto Rico - PR</option>
                                        <option value="RI">Rhode Island - RI</option>
                                        <option value="SC">South Carolina - SC</option>
                                        <option value="SD">South Dakota - SD</option>
                                        <option value="TN">Tennessee - TN</option>
                                        <option value="TX">Texas - TX</option>
                                        <option value="UT">Utah - UT</option>
                                        <option value="VT">Vermont - VT</option>
                                        <option value="VI">Virgin Islands - VI</option>
                                        <option value="VA">Virginia - VA</option>
                                        <option value="WA">Washington - WA</option>
                                        <option value="WV">West Virginia - WV</option>
                                        <option value="WI">Wisconsin - WI</option>
                                        <option value="WY">Wyoming - WY</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Zip Code</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                <div class="txtGrp">
                                    <label for="">Address</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Profile Bio</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="">Description</label>
                                    <textarea name="" id="" class="txtBox"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Rate</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="">Per Hour Rate</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Skills</h5>
                        <div class="txtGrp">
                            <div class="txtBox tagBlk">
                                <ul class="tagLst">
                                    <li><span>Screenwriting <i class="fi-cross"></i></span></li>
                                    <li><span>Martial Arts: Fencing <i class="fi-cross"></i></span></li>
                                    <li><span>Acting Techniques <i class="fi-cross"></i></span></li>
                                    <li><span>Songwriting <i class="fi-cross"></i></span></li>
                                    <li><span>Accents/Dialects <i class="fi-cross"></i></span></li>
                                    <li><span>Mezzo Soprano <i class="fi-cross"></i></span></li>
                                    <li><span>Bike Riding <i class="fi-cross"></i></span></li>
                                    <li><span>Sketch Comedy <i class="fi-cross"></i></span></li>
                                    <li><span>Sketchwriting <i class="fi-cross"></i></span></li>
                                    <li><span>Athletic <i class="fi-cross"></i></span></li>
                                    <li><span>Pole Dancing <i class="fi-cross"></i></span></li>
                                    <li><span>Modeling <i class="fi-cross"></i></span></li>
                                    <li><span>Shakespeare Training <i class="fi-cross"></i></span></li>
                                    <li><span>Weapons Training <i class="fi-cross"></i></span></li>
                                    <li><span>Stunts <i class="fi-cross"></i></span></li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <h5>Speaks</h5>
                        <div class="row formRow">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="row formRow">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                        <div class="txtGrp">
                                            <label for="" class="move">Choose Language</label>
                                            <select name="" id="" class="txtBox">
                                                <option value="">Select</option>
                                                <option value="">English</option>
                                                <option value="">Italian</option>
                                                <option value="">Spanish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                        <div class="txtGrp">
                                            <label for="" class="move">Level</label>
                                            <select name="" id="" class="txtBox">
                                                <option value="">Select</option>
                                                <option value="">Fluent</option>
                                                <option value="">Native</option>
                                                <option value="">Bilingual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-xx-6">
                                <div class="row formRow">
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 col-xx-8">
                                        <div class="txtGrp">
                                            <label for="" class="move">Choose Language</label>
                                            <select name="" id="" class="txtBox">
                                                <option value="">Select</option>
                                                <option value="">English</option>
                                                <option value="">Italian</option>
                                                <option value="">Spanish</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                        <div class="txtGrp">
                                            <label for="" class="move">Level</label>
                                            <select name="" id="" class="txtBox">
                                                <option value="">Select</option>
                                                <option value="">Fluent</option>
                                                <option value="">Native</option>
                                                <option value="">Bilingual</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn">
                            <button type="button" class="webBtn labelBtn"><i class="fi-plus fi-2x"></i> Add New</button>
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Intro Video</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Intro Video</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="intro_thumbnail" data-text="Intro Thumbnail"></button>
                                    <input type="file" name="" id="" class="uploadFile" data-upload="intro_thumbnail">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Intro Video</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="intro_video" data-text="Change Cover"></button>
                                    <input type="file" name="" id="" class="uploadFile" data-upload="intro_video">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Gallery Images</h5>
                        <div class="row formRow">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12">
                                <div class="txtGrp">
                                    <label for="" class="move">Gallery Images</label>
                                    <button type="button" class="txtBox uploadImg" data-upload="gallery_files" data-text="Upload File"></button>
                                    <input type="file" name="" id="" class="uploadFile" data-upload="gallery_files">
                                </div>
                                <div class="upLoadBlk txtBox">
                                    <ul class="imgLst flex">
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/home-slide-02.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/3.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/portfolio-06.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/iteach-texas-mobile-header.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <img src="<?= base_url() ?>assets/images/portfolio-01.jpg" alt="">
                                                <div class="crosBtn"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blk">
                        <h5>Appearance</h5>
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Eye Color</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">Green</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Skin Color</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">White</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Hair Color</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">Brown</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Hair Length</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Shoe Size</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">9.5</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Height</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Weight</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Chest/Bust</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">35</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Cup</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                        <option value="">D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Waist</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="">Hip/Inseam</label>
                                    <input type="text" id="" name="" class="txtBox">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp">
                                    <label for="" class="move">Ethnicity</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">Select</option>
                                        <option value="">English</option>
                                        <option value="">Italian</option>
                                        <option value="">Spanish</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bTn formBtn text-center">
                        <button type="submit" class="webBtn">Save</button>
                    </div>
                </form>
                <div class="br"></div>
                <div class="blk">
                    <div class="_header">
                        <h4>Change Password</h4>
                        <div class="info">
                            <strong><em>Strong Password</em></strong>
                            <div class="infoIn ckEditor">
                                <p>Your password must contain the following:</p>
                                <ol>
                                    <li>At least 8 characters in length (a strong password has at least 14 characters)</li>
                                    <li>At least 1 letter and at least 1 number or symbol</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="">Current password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="">New password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4">
                                <div class="txtGrp pasDv">
                                    <label for="">Confirm new password</label>
                                    <input type="password" name="" id="" class="txtBox">
                                    <i class="icon-eye" id="eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="bTn formBtn text-center">
                            <button type="submit" class="webBtn">Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- setting -->


        <script type="text/javascript">
            $(function() {
                $('.imgLst').sortable();
                // $('#sortable').disableSelection();
            });
        </script>
    </main>
    <?php $this->load->view('includes/footer'); ?>
</body>

</html>