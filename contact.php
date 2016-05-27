<?php require("header.php"); ?>

<div class="parallax-window contact" data-parallax="scroll" data-image-src="img/garamont_background.jpg">
    <div class="visuel-contact">
        <div class="container-fluid">
            <div class="mask"></div>
            <h1 class="text-center garamond">Contact</h1>
        </div>
    </div>
    <div class="container contact-texte">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-xs-10 col-xs-offset-1">
                <h2>Lorem Ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad adipisci asperiores distinctio dolor ducimus eaque eius error esse eum, ipsam nihil praesentium recusandae reprehenderit sed suscipit voluptas! Culpa, dignissimos.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci dolores esse eum perspiciatis possimus repudiandae sint ullam, voluptatibus! Deleniti dolorum ea, enim eveniet exercitationem iste labore modi molestiae similique!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur cum, cumque deleniti dignissimos dolor eos eum expedita hic id ipsam magni perferendis quia quis soluta tempore ullam velit veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, placeat, voluptatum. Amet expedita libero magni numquam optio quasi! Adipisci, atque eos harum necessitatibus omnis provident reprehenderit repudiandae saepe similique suscipit!
                </p>
            </div>
        </div>
    </div>
    <div class="row map-contact">
        <div class="col-md-6">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20976.457503572667!2d2.2285637385309958!3d48.91430267929302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665b73af7d3d9%3A0xddf064acad6b6826!2sLycee+Polyvalent+Claude+Garamont!5e0!3m2!1sfr!2sfr!4v1461888117919"
                        width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
            </div>
        </div>
        <div class="col-md-6">
            <form id="contact" action="#" method="post">
                <div class="left">
                    <input type="text" placeholder="Subject" required="required"/>
                    <textarea placeholder="Message" required="required"></textarea>
                    <input type="email" placeholder="Email" required="required"/>
                    <input type="text" placeholder="Prénom" required="required"/>
                    <input type="text" placeholder="Nom" required="required"/>
                    <div class="send-button cl">
                        <button class="text-center" type="submit">Send</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?php require("footer.php"); ?>