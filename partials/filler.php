<div class="row flexslider-wrapper">
    <img class="filler" src="assets/img/slider/filler.png" alt="" />
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img data-hippi="true" src="assets/img/slider/slide1.jpg" alt="" />
                <!-- <div class="copy">
                    <h2>Level Two Heading One</h2>
                </div> -->
            </li>
            <li>
                <img data-hippi="true" src="assets/img/slider/slide2.jpg" alt="" />
            </li>
            <li>
                <img data-hippi="true" src="assets/img/slider/slide3.jpg" alt="" />
            </li>
        </ul>
    </div>

</div>

<hr>

<div class="row">
    <div class="sixcol">
        <h1>Level One Heading</h1>
        <h3>Level Two Heading</h3>
        <p>This is a sample page filled with tons of filler
           content simply to make an example for new projects.
           Consider this a starting point or if you're lazy, you can
           plug-and-play a little bit, but c'mon.</p>
        <p>First things first, let's start with the <code>&#60;code&#62;</code> element. If you want
           to insert some code, it will look like <code>code</code>. It
           will even jump down if it's a little too long like
           <code>&#60;img src="" /&#62;</code> (shrink your browser
           to see).</p>
        <p>Want it to take up the whole space? Just keep it outside of the
           <code>&#60;p&#62;</code> tags like:</p>
        <code>&#60;img src="" /&#62;</code>
        <p>Also, you can take a look at the right and see an image with
           a pretty frame and a simple caption. Add the frame with
           <code>&#60;img class="frame" src="" /&#62;</code> and add
           the caption as a <code>&#60;figure&#62;</code> and <code>&#60;figcaption&#62;</code>
           combo.</p>
        <a class="button" href="#">This is a button</a>
        <a class="button-primary" href="#">This is a primary button</a>
        <a class="button-secondary" href="#">This is a secondary button</a>
    </div>
    <figure class="sixcol last">
        <img class="frame" data-hippi="true" src="assets/img/placeholder-standard-dark.jpg" alt="Your Alt Tag">
        <figcaption>
            This is the optional caption.
        </figcaption>
    </figure>
    <!-- <a href="#"><img class="frame" data-hippi="true" src="assets/img/placeholder-standard-dark.jpg" alt="Your Alt Tag"></a>
    <p class="wp-caption-text">This is the optional caption.</p> -->
</div>

<hr>

<div class="row">
    <div class="sixcol">
        <h2>Here are some more copy styles</h2>
        <p><code>&#60;del&#62;</code> <del>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</del></p>
        <p><code>&#60;i&#62;</code> <i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</i></p>
        <p><code>&#60;cite&#62;</code> <cite>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</cite></p>
        <p><code>&#60;big&#62;</code> <big>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</big></p>
        <p><code>&#60;small&#62;</code> <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</small></p>
        <p><code>&#60;abbr&#62;</code> <abbr title="abbreviation">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</abbr></p>
        <p><code>&#60;var&#62;</code> <var>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</var></p>
        <p><code>&#60;q&#62;</code> <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</q></p>
        <p><code>&#60;ins&#62;</code> <ins datetime="2011-12-08T20:19:53+00:00">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</ins></p>
            <p><code>&#60;s&#62;</code> <s>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Morbi non nisl et felis consectetur feugiat nec vel tortor.</s></p>
        <p><code>&#60;sup&#62; and &#60;sub&#62;</code> 2<sup>nd</sup>C0<sub>2</sub></p>

        <p><code>&#60;address&#62;</code></p>
           <address>
               123 Example Street,
               City,
               State,
               12345
           </address>
    </div>
    <div class="sixcol last">
        <h2>Image galleries</h2>
        <p>Well, you can see a couple different styles of thumb galleries. We got a
           three, four, and five column. one has plain links, one simply with
           frames on the images, and then some modal action going on.</p>
        <h4>Three column gallery with links</h4>
        <ul class="thumb-gallery thumb-three">
            <?for($it = 0; $it < 6; $it++):?>
            <li>
                <a href="#" title="Your Title">
                    <img class="frame" data-hippi="true" src="assets/img/placeholder-standard-dark.jpg" alt="Your Alt Tag">
                </a>
            </li>
            <?endfor;?>
        </ul>

        <h4>Four column gallery with modal</h4>
        <ul class="thumb-gallery thumb-four">
            <li>
                <a class="fancybox" rel="gallery" href="assets/img/gallery/1_b.jpg" title="Image 1">
                    <img src="assets/img/gallery/1_s.jpg" alt="Your Alt Tag">
                </a>
            </li>
            <li>
                <a class="fancybox" rel="gallery" href="assets/img/gallery/2_b.jpg" title="Image 2">
                    <img src="assets/img/gallery/2_s.jpg" alt="Your Alt Tag">
                </a>
            </li>
            <li>
                <a class="fancybox" rel="gallery" href="assets/img/gallery/3_b.jpg" title="Image 3">
                    <img src="assets/img/gallery/3_s.jpg" alt="Your Alt Tag">
                </a>
            </li>
            <li>
                <a class="fancybox" rel="gallery" href="assets/img/gallery/4_b.jpg" title="Image 4">
                    <img src="assets/img/gallery/4_s.jpg" alt="Your Alt Tag">
                </a>
            </li>
            <li>
                <a class="fancybox" rel="gallery" href="assets/img/gallery/5_b.jpg" title="Image 5">
                    <img src="assets/img/gallery/5_s.jpg" alt="Your Alt Tag">
                </a>
            </li>
        </ul>

        <h4>Five column gallery, no links, but a nice frame!</h4>
        <ul class="thumb-gallery thumb-five">
            <?for($if = 0; $if < 8; $if++):?>
            <li>
                <span>
                    <img class="frame" data-hippi="true" src="assets/img/placeholder-standard-dark.jpg" alt="Your Alt Tag">
                </span>
            </li>
            <?endfor;?>
        </ul>
    </div>
</div>

<hr>



<div class="row">
    <div class="eightcol embed-widget">
        <h3>Oh hey, here's a sample event widget</h3>
        <iframe src="//embed.showclix.com/events/6/tag/scb.fayock.dev" style="width: 100%; height: 772px;"></iframe>
    </div>
    <div class="fourcol last social-widget">
        <h3>Wanna get social?</h3>
        <a class="twitter-timeline" href="https://twitter.com/ShowClix" data-widget-id="324527860742234112">Tweets by @ShowClix</a>
        <div class="fb-like-box" data-href="https://www.facebook.com/showclix" data-width="400" data-show-faces="false" data-stream="true" data-border-color="#eee" data-header="false"></div>
    </div>
</div>

<hr>

<div class="row">
    <div class="twelvecol center-head">
        <h2>Level Two Heading</h2>
        <h3>Level Three Heading</h3>
    </div>
    <div class="fourcol video-wrapper">
        <h4>Look at this YouTube</h4>
        <iframe class="frame" src="http://www.youtube.com/embed/Y6rE0EakhG8" width="400" height="250" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="fourcol video-wrapper">
        <h4>Look at this Vimeo</h4>
        <iframe class="frame" src="http://player.vimeo.com/video/28202867" width="400" height="250" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
    </div>
    <div class="fourcol last">
        <h4>Level Two Heading</h4>
        <h5>Level Three Heading</h5>
        <p>See how easy it is to add videos? Just need add the
           <code>video-wrapper</code> class like
           <code>&#60;div class="fourcol video-wrapper"&#62;</code>
           and throw in the <code>iFrame</code> to get there. Want to throw some
           <em>emphasis</em> or get <strong>bold</strong>?
           Easy, <mark>highlight</mark>.
    </div>
</div>

<hr>

<div class="row">
    <div class="sixcol">
        <h2>More examples</h2>
        <blockquote cite="http://html5doctor.com/blockquote-q-cite/">
            Here's an example of a blockquote. Add additional content semantically with the footer element.
            <footer>
                <cite>
                    <a href="http://html5doctor.com/blockquote-q-cite/">Oli Studholme, HTML5doctor.com</a>
                </cite>
            </footer>
        </blockquote>

        <div class="row">
            <div class="sixcol">
                <h4>Level Four Heading</h4>
                <ol>
                    <li>Ordered list item one.</li>
                    <li>Ordered list item two.</li>
                    <li>Ordered list item three.</li>
                    <li>Ordered list item four.</li>
                    <li>Ordered list item five.</li>
                </ol>
            </div>
            <div class="sixcol last">
                <h4>Level Four Heading</h4>
                <ul>
                    <li>Unordered list item one.</li>
                    <li>Unordered list item two.</li>
                    <li>Unordered list item three.</li>
                    <li>Unordered list item four.</li>
                    <li>Ordered list item five.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sixcol last">
        <h2>Check out this sweet form</h2>
        <form name="contactForm" action="">
            <div class="form-error">
                <i class="icon" data-icon="&#xe001;" aria-hidden="true"></i>
            </div>
            <div class="row">
                <fieldset class="sixcol">
                    <label>Sample Input</label>
                    <input type="text" name="asdf1" id="asdf1" placeholder="Sample Input" required>
                </fieldset>
                <fieldset class="sixcol last">
                    <label>Sample Select</label>
                    <select name="asdf2" id="asdf2" required>
                        <option value="">Please select an option</option>
                        <option value="">-</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                    </select>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="twelvecol">
                    <label>Sample Input</label>
                    <input type="text" name="asdf3" id="asdf3" placeholder="Sample Input"  required>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="twelvecol">
                    <label>Sample Select</label>
                    <select name="asdf4" id="asdf4"  required>
                        <option value="">Please select an option</option>
                        <option value="">-</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                    </select>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="twelvecol">
                    <label>Comments</label>
                    <textarea name="asdf5" id="asdf5" placeholder="Comments..."></textarea>
                </fieldset>
            </div>
            <div class="row">
                <fieldset class="sixcol">
                    <label>Sample Checkbox</label>
                    <span class="check-radio">
                        <input type="checkbox" name="checkbox" id="checkbox1" value="checkbox1" required>
                        <label>Checkbox1</label>
                    </span>
                    <span class="check-radio">
                        <input type="checkbox" name="checkbox" id="checkbox2" value="checkbox2" required>
                        <label>Checkbox2</label>
                    </span>
                </fieldset>
                <fieldset class="sixcol last">
                    <label>Sample Radio</label>
                    <span class="check-radio">
                        <input type="radio" name="radio" id="radio1" value="radio1" required>
                        <label>Radio1</label>
                    </span>
                    <span class="check-radio">
                        <input type="radio" name="radio" id="radio2" value="radio2" required>
                        <label>Radio2</label>
                    </span>
                </fieldset>
            </div>
            <div class="row">
                <div class="twelvecol">
                    <input class="button-primary" name="submit" type="submit" value="Submit" />
                </div>
            </div>
        </form>

    </div>
</div>