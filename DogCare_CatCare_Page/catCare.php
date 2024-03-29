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
            <li><a href="../DogCare_CatCare_Page/dogCare.php">Dog Care</a> </li>
            <li class="active"><a href="../DogCare_CatCare_Page/catCare.php">Cat Care</a> </li>
            <li><a href="../PetGiveaway_Page/petGive.php">Have a Pet to Give Away</a> </li>
            <li><a href="../ContactUs_Page/contactUs.php">Contact Us</a> </li>
        </Ul>
    </div>
    <?php include("../header.php"); ?>
    <div class="Container">
        <br />
        <h1>Cat Care Info</h1>
        <h2>Feeding</h2>
        <p class="red">“Like other animals, cats have some specific nutritional needs. They are "obligate carnivores," which means
            they need animal proteins to avoid severe health consequences. Ask your vet for suggestions about good
            quality food. Cheaper products may not provide enough nutrition to keep your cat happy and healthy. Look for
            cat foods that list large amounts of animal meat like beef, chicken, turkey, or fish.Also look for important
            amino acids like taurine and arginine and fatty acids like arachidonic and linoleic acid.Avoid feeding your
            cat human foods unless you have cleared the food with your veterinarian. Some human foods can make a cat
            severely sick or are even toxic to cats.” [<a href="https://www.wikihow.pet/Take-Care-of-a-Cat"
                target="_blank">1</a>]</p>
        <h2>Exercise</h2>
        <p class="orange">“Because cats spend most of their lives indoors, it is important to offer behavioral enrichment so that kitty
            doesn't become bored. This includes: A cat tree or things to climb on, window perch (cats love to look out
            the window, and adding a bird feeder is a great idea), toys, like a laser pointer, for added bonding time
            together, time spent brushing your cat, etc. Don’t assume your cat is getting enough exercise on their own.
            Obesity in cats is very common, and without those important interactive games you give your pet, they are
            susceptible to becoming overweight” [<a
                href="https://unionlakepetservices.com/blog/cat-care-for-beginners-7-steps-to-a-great-start"
                target="_blank">4</a>].</p>
        <h2>Grooming</h2>
        <p class="blue">“Whether your cat has short or long fur, he will benefit greatly from regular brushing or combing. This helps
            remove the dead hair from his coat so he doesn't ingest it while self-grooming. It also gives you the chance
            to notice any changes to his body. Irregularities such as lumps, bumps or sore spots can then be
            investigated right away by your veterinarian” [<a
                href="https://www.petsafe.net/learn/cats-101-basic-health-care-tips-to-keep-your-cat-healthy"
                target="_blank">3</a>].</p>
        <h2>Housing</h2>
        <p class="green">“Your pet should have her own clean, dry place in your home to sleep and rest. Line your cat's bed with a
            soft, warm blanket or towel. Be sure to wash the bedding often. Please keep your cat indoors. Outdoor cats
            do not live as long as indoor cats. Outdoor cats are at risk of trauma from cars, or from fights with other
            cats, raccoons and free-roaming dogs. Coyotes are known to eat cats. Outdoor cats are more likely to become
            infested with fleas or ticks, as well as contract infectious diseases” [<a
                href="https://www.aspca.org/pet-care/cat-care/general-cat-care" target="_blank">2</a>].</p>
        <br />
        <hr>
        [1] "6 Ways to Take Care of a Cat - wikiHow Pet", Wikihow.pet, 2022. [Online]. Available:<br />
        https://www.wikihow.pet/Take-Care-of-a-Cat. [Accessed: 09- Jul- 2022].<br />
        <br />
        [2] "General Cat Care", ASPCA, 2022. [Online]. Available:<br />
        https://www.aspca.org/pet-care/cat-care/general-cat-care. [Accessed: 09- Jul- 2022].<br />
        <br />
        [3] "Cats 101: Basic Health & Care Tips to Keep Your Cat Healthy | PetSafe®", Petsafe.net, 2022. [Online]. <br />
        Available: https://www.petsafe.net/learn/cats-101-basic-health-care-tips-to-keep-your-cat-healthy. [Accessed: 09- Jul- 2022]. <br />
        <br />
        [4] U. Services, "Cat Care for Beginners: 7 Steps to a Great Start - Union Lake Blog", Union Lake Pet Services,<br />
        2022. [Online]. Available: https://unionlakepetservices.com/blog/cat-care-for-beginners-7-steps-to-a-great-start. [Accessed: 09- Jul-2022]. <br />
    </div>
    <?php include("../footer.php"); ?>
</body>

</html>