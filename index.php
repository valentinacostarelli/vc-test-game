<!DOCTYPE html>
<!-- 
    Author: Valentina Costarelli
    CS 101 Spring 2021
    Date: Sunday, April 18 2021

    This webpage provides a brief overview of the history of HTML. It includes 
    some information on the Wold Wide Web and the internet as well. Content at 
    the end of the page focuses on HMTL5- the newest version of HTML- and its
    interesting features.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>HTML and the Internet</title>
</head>
<body>
    <header>
        <div>
            <code>&lt;/HTML&gt;</code>
            <h1>Hyper-Text Markup Language</h1>
        </div>

        <nav>
            <ul>
                <li><a href="#history">History</a></li>
                <li><a href="#html5">HTML5</a></li>
                <li><a href="https://wikipedia.org/html" target="_blank">Wikipedia</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <section id="examples">
                <article>
                    <div>
                        <p id="pseudo-code">
                            <samp>&lt;h1&gt;This is a Heading!&lt;/h1&gt;</samp>
                            <samp>&lt;p&gt;This is a paragraph.&lt;/p&gt;</samp>
                            <samp>&lt;img src="bkas-lorem.jpg" alt="Doggo Ipsum"&gt;</samp>
                        </p>
                        <p>HTML</p>
                    </div>
                    <div>
                        <div>
                            <h1>This is a Heading!</h1>
                            <p id="p-show">This is a paragraph.</p>
                            <img id="lorem" src="lorem.jpg" alt="Doggo Ipsum">
                        </div>
                        <p>Output</p>
                    </div>
                </article>
            </section>

            <section id="history">
                <h2>History of HTML and the Internet</h2>

                <p>
                In 1989, the World Wide Web as we know it was invented by Tim Berners-Lee 
                at CERN (among other collaborators), motivated by the ability to 
                cross-reference research papers via the Internet.
                </p>

                <!-- XKCD img path: https://imgs.xkcd.com/comics/before_the_internet_2x.png" -->
                <!-- Source: https://xkcd.com/1348/ -->
                <figure id="xkcd">
                    <img src="https://imgs.xkcd.com/comics/before_the_internet_2x.png" alt="XKCD comic">
                    <figcaption>Source: <a href="https://xkcd.com/1348/" target="_blank">XKCD</a></figcaption>
                </figure>

                <p>
                HTML was invented shortly afterwards by Tim to provide text 
                markup capabilities.
                </p>

                <p>
                The Internet had been around for some time following the ARPANet 
                project in the  1960's, but the Web and HTML provided the ability 
                to navigate documents published online and communicate with 
                other hosts. The Domain Name System (DNS) was a very important 
                innovation that supported easy access to websites by mapping 
                easy-to-remember URL names to more cumbersome IP addresses.
                </p>

                <p>        
                During the development of HTML as a hypertext markup language, 
                Tim Berners-Lee  also invented HTTP (HyperText Transfer Protocol) 
                for retrieving documents' text via hypertext links.
                </p>
                
                <p>
                The world's <a href="https://www.w3.org/History/19921103-hypertext/hypertext/WWW/TheProject.html" target="_blank">first web page</a>
                was launched on August 6 1991.
                </p>
                <p>
                One of the first text-based browsers was called Lynx, invented by Lou Montulli 
                and released in March 1993. Not long after, the Mosaic browser was released in 
                April 1993, supporting visual features in HTML like images, nested lists, and forms. 
                Mosaic would be replaced by the more popular browser Netscape the following year in
                November by Marc Andreesen, and takes credit for extending the HTML language with 
                new tags. These extensions unfortunately included presentational HTML tags that 
                could be used to design web pages, resulting in web pages losing their semantic meaning.
                </p>

                <p>
                Presentational tags would later be discouraged after the invention of CSS by H&aring;kon Wium Lie 
                in October 1994. to de-couple document structure and style.
                </p>

                <p>
                In 1994, the World Wide Consortium (W3C) was formed to establish a set of 
                open standards for the web, and still lives on to this day.
                </p> 

                <!-- W3C Logo Image path: https://www.w3.org/Icons/w3c_home.png -->
                <!-- Source: https://www.w3.org/ -->
                <figure>
                    <img src="https://www.w3.org/Icons/w3c_home.png" alt="W3C logo">
                    <figcaption> Source: <a href="https://www.w3.org/" target="_blank">w3.org</a></figcaption> 
                </figure> 

                <p>
                We have seen an exciting number of developments over the last three decades 
                in web publishing, including the addition of CSS and JavaScript to provide page 
                styling and interactivity.
                </p>

                <p>
                Every webpage you visit likely has at least three languages working together 
                to provide content structure, style, and interactivity. In 1995, Brendan 
                Elrich invented JavaScript (in 11 days!) as a language to interact with page 
                elements and listen to different events on the page. As with HTML and CSS,
                JavaScript has presented a number of standardization issues across browsers,
                notably Internet Explorer 6. But standards have improved significantly since
                HTML5, CSS3, and ES6 JavaScript.
                </p> 
            </section>

            <section id="html5">
                <h2>HTML5</h2>

                <p>
                In 2014, HTML5 was released by W3C with various important new features, notably 
                special elements for semantic tags. Semantic tags have made for more standardized 
                content organization of web documents, improved accessibility features, and 
                improved ease and efficiency for search engines to crawl and rank websites (SEO).
                </p>

                <article id="html-comparison">
                    <div id="html-structure">
                        <div>div id="header"</div>
                        <div class="main-structure">
                            <div>div id="sidebar"</div>
                            <div>
                                <div>div class="post"</div>
                                <div>div class="post"</div>
                            </div>
                        </div>
                        <div>div id="footer"</div>
                    </div>
                    <div id="html5-structure">
                        <div>header</div>
                        <div class="main-structure">
                            <div>aside</div>
                            <div>
                                <div>article</div>
                                <div>article</div>
                            </div>
                        </div>
                        <div>footer</div>
                    </div>
                </article>

                <p>
                HTML5 has also added support for more media formats on the web with tags like 
                &lt;audio&gt; and &lt;video&gt;, and has also added support for various form input 
                tags and attributes for different types of user input and client-side validation.
                </p>

                <p>
                It's been over 30 years since HTML was first created, but it still lives up to its 
                original purpose.
                </p>
            </section>

            <figure id="tim-quote">
                <blockquote>
                    <p>
                        The Web as I envisaged it, we have not seen it yet. 
                        The future is still so much bigger than the past.
                    </p>
                </blockquote>
                <figcaption>- Tim Berners-Lee</figcaption>
            </figure>
        </section>
        <aside>
            <h3>Cool Websites</h3>
            <ul> 
            <li><a href="https://www.falstad.com/mathphysics.html" target="_blank">Falstad Physics</a></li>
            <li><a href="https://www.scientificamerican.com" target="_blank">Scientific American</a></li>
            <li><a href="https://weather.com" target="_blank">The Weather Channel</a></li>
            <li><a href="https://xkcd.com" target="_blank">XKCD</a></li>
            <li><a href="https://www.desmos.com" target="_blank">Desmos</a></li>
            </ul>
        </aside>
    </main>
    <footer>
        <p>Copyright &copy; 2021</p>
        <code>&lt;/HTML&gt;</code>
    </footer>
</body>
</html>

