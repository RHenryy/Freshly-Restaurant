<?php include_once("header.php"); ?>


<main>

    <section class="contact1">
        <h1>Contact us</h1>
        <p>If you want to make a reservation, please complete this form.</p>
        <span style="text-align:center; font-style:italic;">Fields with <span class="red">*</span> are required</span>

        <!--<div class="form">-->
        <!--    <form>-->
        <!--    <h2>Reservation</h2>-->
        <!--    <h2>Details</h2>-->

        <!--    <div><label for="date" id="date">* Date</label><br/>-->
        <!--    <input type="text" placeholder="jj/mm/aaaa"></div>-->
        <!--    <div><label for="Name" id="date">* Name</label><br/>-->
        <!--    <input type="text"></div>-->
        <!--    <div><label for="Time" id="date">* Time</label><br/>-->
        <!--    <input type="text" placeholder="--:--"></div>-->
        <!--    <div><label for="Email" id="date">Email</label><br/>-->
        <!--    <input type="email"></div>-->
        <!--    <div><label for="Number of guests" id="date">* Number of guests</label><br/>-->
        <!--    <input type="text"></div>-->
        <!--    <div><label for="Telephone" id="date">Telephone</label><br/>-->
        <!--    <input type="tel"></div>-->

        <!--    <div><h2>Further request</h2></div><br/>-->
        <!--    <div><textarea></textarea></div>-->
        <!--    <input type="submit" value="Reserve">-->
        <!--    </form>-->
        <!--</div>-->
        <div class="form">
            <form class="left-form">
                <h2>Reservation</h2>
                <label for="date"><span class="red">*</span> Date</label>
                <input type="text" name="date" id="date">
                <label for="time"><span class="red">*</span> Time</label>
                <input type="text" id="time" name="time">
                <label for="guests"><span class="red">*</span> Number of guests</label>
                <input type="text" id="guests" name="guests">
            </form>
            <form class="left-form">
                <h2>Details</h2>
                <label for="name"><span class="red">*</span> Name</label>
                <input type="text" id="name" name="name">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="tel"><span class="red">*</span> Telephone</label>
                <input type="tel" id="tel" name="tel">
            </form>

            <form class="bottom-form">
                <h2>Further request</h2>
                <textarea></textarea>
                <input type="submit" value="Reserve">

            </form>
        </div>
    </section>
    <section>
        <h1>Our location</h1>
        <div class="map">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=-74.00753527879716%2C40.731736527977986%2C-74.00227814912797%2C40.73432588975293&amp;layer=mapnik" style="border: 1px solid black"></iframe>
        </div>

    </section>


</main>






<?php include_once("footer.php"); ?>