<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Browse Available Pets</title>
    <link rel="stylesheet" type="text/css" href="../Browse_Animal_Page(BAP)/CSS_BAP.css">
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
            <li class="active"><a href="../Browse_Animal_Page(BAP)/Pets.php">Browse Available Pets</a> </li>
            <li><a href="../FindDog_FindCat_Page/findAnimal.php">Find a dog/cat</a> </li>
            <li><a href="../DogCare_CatCare_Page/dogCare.php">Dog Care</a> </li>
            <li><a href="../DogCare_CatCare_Page/catCare.php">Cat Care</a> </li>
            <li><a href="../PetGiveaway_Page/petGive.php">Have a Pet to Give Away</a> </li>
            <li><a href="../ContactUs_Page/contactUs.php">Contact Us</a> </li>
        </Ul>
    </div>

    <?php include("../header.php"); ?>

    <div class="Container">
        <div id="petList">
            <div id="pet" style="border: 1px solid black;">
                <img src="dogImg1.jpg" alt="Dog picture" width="150">
                <ul>
                    <li>Golden Retriever</li>
                    <li>5 years old </li>
                    <li>Male</li>
                    <li>Gets along with other Dogs</li>
                    <li>Comments: I love him and he is nice.</li>
                </ul>
                <button>Interested</button>
            </div>
            <div id="pet" style="border: 1px solid black;">
                <img src="dogImg2.jpg" alt="Dog picture" width="150">
                <ul>
                    <li>Poodle</li>
                    <li>12 years old </li>
                    <li>Male</li>
                    <li>Gets along with other Kids</li>
                </ul>
                <button>Interested</button>
            </div>
            <div id="pet" style="border: 1px solid black;">
                <img src="dogImg3.jpg" alt="Dog picture" width="150">
                <ul>
                    <li>Beagle</li>
                    <li>8 years old </li>
                    <li>Female</li>
                    <li>None</li>
                </ul>
                <button>Interested</button>
            </div>
            <div id="pet" style="border: 1px solid black;">
                <img src="dogImg4.jpg" alt="Dog picture" width="150">
                <ul>
                    <li>Dachshund</li>
                    <li>6 months old </li>
                    <li>Male</li>
                    <li>Gets along with other Cats</li>
                    <li>Gets along with other Dogs</li>
                </ul>
                <button>Interested</button>
            </div>
            <div id="pet" style="border: 1px solid black;">
                <img src="catImg1.jpg" alt="Cat picture" width="150">
                <ul>
                    <li>Abyssinian</li>
                    <li>4 years old </li>
                    <li>Female</li>
                    <li>Gets along with other Kids</li>
                </ul>
                <button>Interested</button>
            </div>
            <div id="pet" style="border: 1px solid black;">
                <img src="catImg2.jpg" alt="Cat picture" width="150">
                <ul>
                    <li>Other</li>
                    <li>20 months old </li>
                    <li>Male</li>
                    <li>Gets along with other Dogs</li>
                </ul>
                <button>Interested</button>
            </div>
        </div>

    </div>

    <?php include("../footer.php"); ?>
</body>

</html>