<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Project</title>
    <link rel="stylesheet" type="text/css" href="./animalCare.css">
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
            <li class="active"><a href="../DogCare_CatCare_Page/dogCare.php">Dog Care</a> </li>
            <li><a href="../DogCare_CatCare_Page/catCare.php">Cat Care</a> </li>
            <li><a href="../PetGiveaway_Page/petGive.php">Have a Pet to Give Away</a> </li>
            <li><a href="../ContactUs_Page/contactUs.php">Contact Us</a> </li>
        </Ul>
    </div>
    <?php include("../header.php"); ?>
    <div class="Container">
        <br />
        <h1>Dog Care Info</h1>
        <h2>Feeding</h2>
        <p class="red">”If you have been feeding your dog commercial pet foods, you may be jeopardizing his or her health. Cheap,
            supermarket pet foods are often composed of ground-up parts of animals deemed by Agriculture Department
            inspectors unfit for human consumption. Many guardians feed healthful, meatless diets to their dogs” [<a
                href="https://www.peta.org/living/animal-companions/caring-dogs/." target="_blank">1</a>].
            <br /><br />
            “Premium-quality dry food provides a well-balanced diet for adult dogs and may be mixed with water, broth or
            canned food. Your dog may enjoy cottage cheese, cooked egg or fruits and vegetables, but these additions
            should not total more than ten percent of his daily food intake. Puppies should be fed high-quality,
            brand-name puppy food (large breed puppy foods for large breeds)” [<a
                href="https://www.aspca.org/pet-care/dog-care/general-dog-care" target="_blank">2</a>].
        </p>
        <h2>Exercise</h2>
        <p class="orange">“Dogs need exercise to burn calories, stimulate their minds, and stay healthy. Individual exercise needs vary
            based on breed or breed mix, sex, age and level of health. Exercise also tends to help dogs avoid boredom,
            which can lead to destructive behaviors. Supervised fun and games will satisfy many of your pet's
            instinctual urges to dig, herd, chew, retrieve and chase” [<a
                href="https://www.aspca.org/pet-care/dog-care/general-dog-care" target="_blank">2</a>].</p>
        <h2>Grooming</h2>
        <p class="blue">“Long coated dogs are prone to developing matts and ice balls in their hair. Overgrown nails are common in
            elderly dogs and can make it more difficult for them to walk. In addition, such nails are much more prone to
            breaking, which can be quite painful” [<a href="https://iditarod.com/ten-tips-for-taking-care-of-your-dog/."
                target="_blank">3</a>]. </p>
        <h2>Housing</h2>
        <p class="green">“Indoor dogs share the roof over our heads and, sometimes, our furniture as well. Puppies, and some mature
            dogs as well, benefit from having a crate, which can help greatly in housetraining and other training. Many
            dogs also feel secure in a crate because it is their own space, or “den.” You may also want to provide a
            comfortable dog bed for your pet. In addition, your dog should have a designated, quiet place where food and
            water bowls are placed” [<a
                href="https://www.merckvetmanual.com/dog-owners/selecting-and-providing-a-home-for-a-dog/providing-a-home-for-a-dog."
                target="_blank">4</a>].</p>
        <br />
        <hr>
        [1]"Dog Care 101: How to Take Care of Dogs In Your Home | PETA", PETA, 2022. [Online]. Available:<br />
        https://www.peta.org/living/animal-companions/caring-dogs/. [Accessed: 09- Jul- 2022].<br />
        <br />
        [2]"General Dog Care", ASPCA, 2022. [Online]. Available:<br />
        https://www.aspca.org/pet-care/dog-care/general-dog-care [Accessed: 09- Jul- 2022].<br />
        <br />
        [3] D. Johnson, "Ten Tips for Taking Care of Your Dog", Iditarod, 2022. [Online]. Available:<br />
        https://iditarod.com/ten-tips-for-taking-care-of-your-dog/. [Accessed: 09- Jul- 2022].<br />
        <br />
        [4] J. Bukowski and S. Aiello, "Providing a Home for a Dog - Dog Owners - MSD Veterinary Manual", MSD<br />
        Veterinary Manual, 2022. [Online]. Available: https://www.merckvetmanual.com/dog-owners/selecting-and-providing-a-home-for-a-dog/providing-a-home-for-a-dog.<br />
        [Accessed: 09- Jul- 2022].
    </div>
    <?php include("../footer.php"); ?>
</body>

</html>