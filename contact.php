<?php require("header.php"); ?>

<div class="contact">
    <div class="contactimage">
        <div class="filtre">
            <img src="img/contact3.png" id="contact" width="100%" >
        </div>
    </div>
    <div class="part1">
        <img src="img/flechefond.png" id="vert">
        <h2>Lorem Ipsum</h2>
        <p>Vide, quantum, inquam, fallare, Torquate. oratio me istius philosophi non offen</br>
            dit; nam et complectitur verbis, quod vult, et dicit plane, quod intellegam; et</br>
            tamen ego a philosopho, si afferat eloquentiam, non asperner, si non habeat, non</br>
            admodum flagitem. re mihi non aeque satisfacit, et quidem locis pluribus. sed</br>
            quot homines, tot sententiae; falli igitur possumus.
        </p>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20976.457503572667!2d2.2285637385309958!3d48.91430267929302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e665b73af7d3d9%3A0xddf064acad6b6826!2sLycee+Polyvalent+Claude+Garamont!5e0!3m2!1sfr!2sfr!4v1461888117919"
                width="500" height="500" frameborder="0" style="border:0" allowfullscreen>

        </iframe>
        <div  class="container">
            <form id="contact" action="#" method="post">
                <div class="left">
                    <input type="text" placeholder="Subject" required="required"/>
                    <textarea placeholder="Message" required="required"></textarea>
                    <input type="email" placeholder="Email" required="required"/>
                    <input type="text" placeholder="Name" required="required"/>
                    <input type="text" placeholder="Nom" required="required"/>
                    <div class="send-button cl">
                        <button type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require("footer.php"); ?>