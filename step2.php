<?php $step = 2; ?>
<?php include("includes/header.php"); ?>

<?php $hero_title = 'Validator <br>Selection Study'; ?>
<?php $hero_desc = 'Welcome and thank you very much for taking the time to participate in this study. '; ?>
<?php include("includes/hero.php"); ?>

<section class="bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-lg-5">
                <h2 class="font-weight-bold">INSTRUCTIONS</h2>
            </div>
            <div class="col col-lg-7">
                <p class="font-weight-bold">In this study, we want to learn more about your behavior as a nominator.</p>
                <p>Please make sure, that you read all instructions carefully and that you spend appropriate time making your choices. This study takes roughly 20 minutes of your undivided attention. To be able to grant you the reward for participating at this study, we ask you to provide a DOT address (more information later).</p>

                <p>Generally, choices depend on your preferences and are neither right or wrong.</p>

                <p>Note that we keep the right to expel users from a reward at our discretion in the case that we see users exploiting the study (e.g., by not making choices carefully). Please do not share the participation code with anybody, because that would deprive you of the opportunity to earn the reward.</p>
            </div>
    </div>
    <div class="row">
        <div class="col col-lg-5">
            <h2 class="font-weight-bold">DATA <br>COLLECTION <br>AND PRIVACY <br>AGREEMENT</h2>
        </div>
        <div class="col col-lg-7">
            <p class="font-weight-bold">We value your privacy.</p>
            <p>During this study, we collect Personal Data in the form of e-mail and Polkadot addresses from participants. The sole purpose of this is to distribute further information on the study and to pay out participation rewards in DOT. After the data collection phase, that information is deleted and we only keep anonymized choices and responses from the users in this study. This data will be used for scientific purposes (e.g., blog-posts, peer-reviewed papers and conferences). We do not make any effort to link individual answers to personal data.</p>

            <p>If you have any questions, contact <a href="mailto:experiments@web3.foundation" class="font-weight-bold text-underline" target="_blank">experiments@web3.foundation.</a></p>

            <p class="note">By clicking “start” below, you give Web 3.0 Technologies Foundation ("W3F"), as Controller, your consent to process your Personal Data exclusively for the purpose of being able to make you participate in the study and send you a debriefing e-mail, in accordance with Section III., let. B (1) (Legal basis of processing) of W3F <a href="https://web3.foundation/privacy-and-cookies/" class="font-weight-bold text-underline" target="_blank">Privacy Policy</a>.</p>
        </div>
    </div>
</section>

<section class="bg-dark">
    <div class="container">
        <div class="row mb-5">
            <div class="col col-lg-6">
                <h2 class="text-white font-weight-bold">YOUR INFO</h2>
                <p>Please leave your email address so that we can follow up with you and your Polkadot address that you want to
                    receive the reward for participating in this study.
                </p>
                <p class="text-primary">
                    Please make sure that you have ownership of this address. Note, that this address cannot be changed anymore. You
                    will receive more information on the details of the reward at the end.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="email" id="email" name="email" placeholder="Email">
                <input type="text" id="polkadot" name="polkadot" placeholder="Your Polkadot Address">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col col-lg-6 text-white">
                <h2 class="font-weight-bold text-white">START THE STUDY</h2>
                <p>In this study, we want to learn more about your behavior in selecting validators on the Polkadot network. The study consists of three stages.</p>
                <p>By clicking “Start” you agree with the above mentioned privacy agreement and start the study.</p>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <button class="submit btn btn-lg btn-primary btn-white">Start</button>
            </div>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>