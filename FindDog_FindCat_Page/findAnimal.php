<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="../FindDog_FindCat_Page/FindAnimal.css">
    <script defer>
        function disclaimerBox() {
            alert("Your information will not be sold or misused, and the site builder is protected from any incorrect information posted by a pet owner.");
        }
        function showCat() {
            if (document.getElementById("dogForm").style.display == 'none') {

                document.getElementById("catForm").style.display = 'block';
            } else {
                document.getElementById("dogForm").style.display = 'none'
                document.getElementById("catForm").style.display = 'block';
            }
        }
        function showDog() {
            if (document.getElementById("catForm").style.display == 'none') {

                document.getElementById("dogForm").style.display = 'block';
            } else {
                document.getElementById("catForm").style.display = 'none'
                document.getElementById("dogForm").style.display = 'block';
            }
        }
    </script>
    <script src="../SiteJS.js"></script>
</head>

<body>
    <div class="SideMenu">
        <Ul>
            <li><a href="../index/index.php">Home</a> </li>
            <li><a href="../Browse_Animal_Page(BAP)/Pets.php">Browse Available Pets</a> </li>
            <li class="active"><a href="../FindDog_FindCat_Page/findAnimal.php">Find a dog/cat</a> </li>
            <li><a href="../DogCare_CatCare_Page/dogCare.php">Dog Care</a> </li>
            <li><a href="../DogCare_CatCare_Page/catCare.php">Cat Care</a> </li>
            <li><a href="../PetGiveaway_Page/petGive.php">Have a Pet to Give Away</a> </li>
            <li><a href="../ContactUs_Page/contactUs.php">Contact Us</a> </li>
        </Ul>
    </div>

  <?php include("../header.php"); ?>

    <div class="Container">
        <br />
        <h1>Find An Animal Form</h1>
        <label>Choose Animal Type: </label>
        <div>
            <button onclick="showDog()">Dog</button>
            <button onclick="showCat()">Cat</button>
        </div>

        <form id="dogForm" style="display:none" onsubmit=" return FindVerify()">
            <fieldset>
                <legend> Dog Form </legend>

                <label> <input type="radio" name="animalType" value="dog" checked>Dog</label> <br /><br />

                <label> Dog Breed : </label> <br />
                <label>
                    <input id="labradorRetriever" type="checkbox" name="animalBreed[]" value="labradorRetriever">
                    Labrador Retriever
                </label>
                <label>
                    <input id="frenchBulldog" type="checkbox" name="animalBreed[]" value="frenchBulldog">
                    French Bulldog
                </label>
                <label>
                    <input id="germanShepherd" type="checkbox" name="animalBreed[]" value="germanShepherd">
                    German Shepherd
                </label>
                <br />
                <label>
                    <input id="goldenRetriever" type="checkbox" name="animalBreed[]" value="goldenRetriever">
                    Golden Retriever
                </label>
                <label>
                    <input id="englishBulldog" type="checkbox" name="animalBreed[]" value="englishBulldog">
                    English Bulldog
                </label>
                <label>
                    <input id="poodle" type="checkbox" name="animalBreed[]" value="poodle">
                    Poodle
                </label>
                <br />
                <label>
                    <input id="beagle" type="checkbox" name="animalBreed[]" value="beagle">
                    Beagle
                </label>
                <label>
                    <input id="rottweiler" type="checkbox" name="animalBreed[]" value="rottweiler">
                    Rottweiler
                </label>
                <label>
                    <input id="dachshund" type="checkbox" name="animalBreed[]" value="dachshund">
                    Dachshund
                </label>
                <label>
                    <input id="other" type="checkbox" name="animalBreed[]" value="other">
                    Other
                </label> <br /><br />

                <label> Preferred Age of Animal:
                    <select name="ageCategory">
                        <option value="otherDog"> Does Not Matter </option>
                        <option value="adolescentDog"> 6-24 months (Adolescent) </option>
                        <option value="adultsDog"> 2-6 years (Adults) </option>
                        <option value="seniorDog"> 7-11+ years (Senior) </option>
                    </select>
                </label> <br /><br />

                <label> Preferred Gender:
                    <select name="GenderCategory">
                        <option value="dcGenderDog"> Does Not Matter </option>
                        <option value="maleDog"> Male </option>
                        <option value="femaleDog"> Female </option>
                    </select>
                </label> <br /><br />

                <label>Requirements: </label> <br />
                <label>
                    <input id="dogFriendly" type="checkbox" name="requirements[]" value="dogFriendly">
                    Gets Along With Other Dogs
                </label>
                <label>
                    <input id="catFriendly" type="checkbox" name="requirements[]" value="catFriendly">
                    Gets Along With Other Cats
                </label>
                <label>
                    <input id="kidFriendly" type="checkbox" name="requirements[]" value="kidFriendly">
                    Gets Along With Kids
                </label>
                <label>
                    <input id="dogNoneReq" type="checkbox" name="requirements[]" value="dogNoneReq">
                    None
                </label> <br /><br />
            </fieldset>
            <input id="submit" type="submit" value="Submit" />
            <input id="reset" type="reset" value="Reset" />
        </form>

        <form id="catForm" style="display:none" onsubmit=" return FindVerify()">
            <fieldset>
                <legend> Cat Form </legend>

                <label> <input type="radio" name="animalType" value="cat" checked>Cat</label> <br /><br />

                <label> Cat Breed : </label> <br />
                <label>
                    <input id="ragdoll" type="checkbox" name="animalBreed[]" value="ragdoll">
                    Ragdoll
                </label>
                <label>
                    <input id="maineCoonCat" type="checkbox" name="animalBreed[]" value="maineCoonCat">
                    Maine Coon Cat
                </label>
                <label>
                    <input id="sphynx" type="checkbox" name="animalBreed[]" value="sphynx">
                    Sphynx
                </label>
                <br />
                <label>
                    <input id="persian" type="checkbox" name="animalBreed[]" value="persian">
                    Persian
                </label>
                <label>
                    <input id="devonRex" type="checkbox" name="animalBreed[]" value="devonRex">
                    Devon Rex
                </label>
                <label>
                    <input id="britishShorthair" type="checkbox" name="animalBreed[]" value="britishShorthair">
                    British Shorthair
                </label>
                <br />
                <label>
                    <input id="abyssinian" type="checkbox" name="animalBreed[]" value="abyssinian">
                    Abyssinian
                </label>
                <label>
                    <input id="americanShorthair" type="checkbox" name="animalBreed[]" value="americanShorthair">
                    American Shorthair
                </label>
                <label>
                    <input id="scottishFold" type="checkbox" name="animalBreed[]" value="scottishFold">
                    Scottish Fold
                </label>
                <label>
                    <input id="other" type="checkbox" name="animalBreed[]" value="other">
                    Other
                </label> <br /><br />

                <label> Preferred Age of Animal:
                    <select name="ageCategory">
                        <option value="otherCat"> Does Not Matter </option>
                        <option value="adolescentCat"> 6-24 months (Adolescent) </option>
                        <option value="adultsCat"> 2-6 years (Adults) </option>
                        <option value="seniorCat"> 7-11+ years (Senior) </option>
                    </select>
                </label> <br /><br />

                <label> Preferred Gender:
                    <select name="GenderCategory">
                        <option value="dcGenderCat"> Does Not Matter </option>
                        <option value="maleCat"> Male </option>
                        <option value="femaleCat"> Female </option>
                    </select>
                </label> <br /><br />

                <label>Requirements: </label> <br />
                <label>
                    <input id="dogFriendly" type="checkbox" name="requirements[]" value="dogFriendly">
                    Gets Along With Other Dogs
                </label>
                <label>
                    <input id="catFriendly" type="checkbox" name="requirements[]" value="catFriendly">
                    Gets Along With Other Cats
                </label>
                <label>
                    <input id="kidFriendly" type="checkbox" name="requirements[]" value="kidFriendly">
                    Gets Along With Kids
                </label>
                <label>
                    <input id="catNoneReq" type="checkbox" name="requirements[]" value="catNoneReq">
                    None
                </label> <br /><br />
            </fieldset>
            <input id="submit" type="submit" value="Submit" />
            <input id="reset" type="reset" value="Reset" />
        </form>
    </div>

    <?php include("../footer.php"); ?>
</body>

</html>