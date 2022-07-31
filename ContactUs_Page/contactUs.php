<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="./contactUs.css">
    <script>
        function disclaimerBox() {
            alert("Your information will not be sold or misused, and the site builder is protected from any incorrect information posted by a pet owner.");
        }
    </script>
    <script src="../SiteJS.js"></script>
</head>

<body>
    <div class="SideMenu">
        <Ul>
            <li><a href="../index/index.php">Home</a> </li>
            <li><a href="../Browse_Animal_Page(BAP)/Pets.php">Browse Available Pets</a> </li>
            <li><a href="../FindDog_FindCat_Page/findAnimal.php">Find a dog/cat</a> </li>
            <li><a href="../DogCare_CatCare_Page/dogCare.php">Dog Care</a> </li>
            <li><a href="../DogCare_CatCare_Page/catCare.php">Cat Care</a> </li>
            <li><a href="../PetGiveaway_Page/petGive.php">Have a Pet to Give Away</a> </li>
            <li class="active"><a href="../ContactUs_Page/contactUs.php">Contact Us</a> </li>
        </Ul>
    </div>
    <?php include("../header.php"); ?>
    <div class="Container">
        <div class="contactInfo">
            <h1>Contact Us</h1>
            <P>
                Name : Rajakanth Kandasamy <br /><br />
                StudentID: 40210959 <br /><br />
                Email: ra_kanda@live.concordia.ca
            </P>
        </div>
        <hr>
        <p class="picSource">The photos come from Unsplash.com where their license agreement states: <br />
            - All photos can be downloaded and used for free <br />
            - For commercial and non-commercial purposes <br />
            - No permission is required <br /><br />
            Home Page Photo: https://unsplash.com/photos/FAz_61uH1nA <br />
            1st Cat Photo: https://unsplash.com/photos/FilM6ng7VGQ <br />
            1st Dog Photo: https://unsplash.com/photos/FFwNGYZK-2o <br />
            2st Cat Photo: https://unsplash.com/photos/E9kVmtiqqGE <br />
            2st Dog Photo: https://unsplash.com/photos/XCHhSPhXsiI <br /><br />

            Browse Animal Page Photos: <br />
            https://unsplash.com/photos/guSpMSYLcs0 <br />
            https://unsplash.com/photos/C45XkRyritI <br />
            https://unsplash.com/photos/bRMlr64JpJE <br />
            https://unsplash.com/photos/tzo7uL1xvQE <br />
            https://unsplash.com/photos/wTAWkgpmrXU <br />
            https://unsplash.com/photos/ullL5qYPDoE <br />

        </p>

    </div>
    <?php include("../footer.php"); ?>
</body>

</html>