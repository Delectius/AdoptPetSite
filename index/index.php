<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="./CSS_index.css">
    <script src="./index.js"></script>
    
</head>

<body>
    <div class="SideMenu">
        <Ul>
            <li class="active"><a>Home</a> </li>
            <li><a href="../Browse_Animal_Page(BAP)/Pets.php">Browse Available Pets</a> </li>
            <li><a href="../FindDog_FindCat_Page/findAnimal.php">Find a dog/cat</a> </li>
            <li><a href="../DogCare_CatCare_Page/dogCare.php">Dog Care</a> </li>
            <li><a href="../DogCare_CatCare_Page/catCare.php">Cat Care</a> </li>
            <li><a href="../PetGiveaway_Page/petGive.php">Have a Pet to Give Away</a> </li>
            <li><a href="../ContactUs_Page/contactUs.php">Contact Us</a> </li>
        </Ul>
    </div>

    <?php include("../header.php"); ?>

    <div class="Container">
        <h2>A Service To Give Another Chance For a Pet</h2>

        <p>Here at CareWind, we care for cats and dogs and give them a new chance, a new home.
            We have many that we have rescued from the wild that have been abandoned by their families.
            We provide them with the medical care they need, and we will support you
            in the process of fostering these animals. We have pages that provide instructions
            on how to properly look after these animals and pages in the event that one of your own pets
            becomes too much to handle! <br /><br />
            Here are some of our animals:
        </p>

        <h4 class="cardTitle">Meet Our Animals!</h4>

        <div class="cards">
            <div class="card">
                <div class="cardContent"> <img src="./Cat1.jpg" alt="Picture of a grey cat" width="125"> </div>
                <div class="cardText">This is Ella!</div>
            </div>
            <div class="card">
                <div class="cardContent"> <img src="./dog1.jpg" alt="Picture of a beige dog" width="127"> </div>
                <div class="cardText">This is Max!</div>
            </div>
            <div class="card">
                <div class="cardContent"> <img src="./Cat2.jpg" alt="Picture of a white cat" width="125"> </div>
                <div class="cardText">This is Jacob!</div>
            </div>
            <div class="card">
                <div class="cardContent"> <img src="./dog2.jpg" alt="Picture of a golden dog" width="127"> </div>
                <div class="cardText">This is Elliot!</div>
            </div>
        </div>

        <div class="quotation">
            <p class="quote"> This is amazing! I just got my dog Alex from them and the experience has been terrific
                so
                far. The staff is friendly and very knowledgeable. I would highly recommend their services! </p>
            <div class="quoteAuthor">- An Happy Customer</div>
        </div>
    </div>

    <?php include("../footer.php"); ?>

</body>

</html>