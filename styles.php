<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Paul Robert Lloyd"/>
    <meta name="description" content=""/>

    <!--css-->
    <link rel="stylesheet" href="/_css/core.css" type="text/css" media="all"/>

    <!--icons-->
    <link rel="shortcut icon" href="/_assets/favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon-precomposed" href="/_assets/apple-touch-icon-precomposed.png" type="image/png"/>

    <!--meta-->
    <title>Road Trip: Styleguide</title>
</head>

<body>
    <div role="document" class="banner">

        <div role="main" class="main">
            <h1>Styleguide</h1>

            <p>This document is a guide to the mark-up styles used throughout the site.</p>
            <h2>Sections</h2>
            <p>The main page header of this guide is an <code>h1</code> element. Any header elements may include links, as depicted in the example.</p>
            <p>The secondary header above is an <code>h2</code> element, which may be used for any form of important page-level header. More than one may be used per page. Consider using an <code>h2</code> unless you need a header level of less importance, or as a sub-header to an existing <code>h2</code> element.</p>
            <h3>Third-Level Header</h3>
            <p>The header above is an <code>h3</code> element, which may be used for any form of page-level header which falls below the <code>h2</code> header in a document hierarchy.</p>
            <h4>Fourth-Level Header</h4>
            <p>The header above is an <code>h4</code> element, which may be used for any form of page-level header which falls below the <code>h3</code> header in a document hierarchy.</p>
            <h5>Fifth-Level Header</h5>
            <p>The header above is an <code>h5</code> element, which may be used for any form of page-level header which falls below the <code>h4</code> header in a document hierarchy.</p>
            <h6>Sixth-Level Header</h6>
            <p>The header above is an <code>h6</code> element, which may be used for any form of page-level header which falls below the <code>h5</code> header in a document hierarchy.</p>

            <h2 id="grouping">Grouping content</h2>
            <h3>Paragraphs</h3>
            <p>All paragraphs are wrapped in <code>p</code> tags. Additionally, <code>p</code> elements can be wrapped with a <code>blockquote</code> element <em>if the <code>p</code> element is indeed a quote</em>. Historically, <code>blockquote</code> has been used purely to force indents, but this is now achieved using CSS. Reserve <code>blockquote</code> for quotes.</p>

            <h3>Horizontal rule</h3>
            <p>The <code>hr</code> element represents a paragraph-level thematic break, e.g. a scene change in a story, or a transition to another topic within a section of a reference book. The following extract from <cite>Pandora&#8217;s Star</cite> by Peter F. Hamilton shows two paragraphs that precede a scene change and the paragraph that follows it:</p>
            <div class="example">
                <p>Dudley was ninety-two, in his second life, and fast approaching time for another rejuvenation. Despite his body having the physical age of a standard fifty-year-old, the prospect of a long degrading campaign within academia was one he regarded with dread. For a supposedly advanced civilization, the Intersolar Commonwearth could be appallingly backward at times, not to mention cruel.</p>
                <p><i>Maybe it won&#8217;t be that bad</i>, he told himself. The lie was comforting enough to get him through the rest of the night&#8217;s shift.</p>
                <hr/>
                <p>The Carlton AllLander drove Dudley home just after dawn. Like the astronomer, the vehicle was old and worn, but perfectly capable of doing its job. It had a cheap diesel engine, common enough on a semi-frontier world like Gralmond, although its drive array was a thoroughly modern photoneural processor. With its high suspension and deep-tread tyres it could plough along the dirt track to the observatory in all weather and seasons, including the metre-deep snow of Gralmond&#8217;s winters.</p>
            </div>

            <h3>Pre-formatted text</h3>
            <p>The <code>pre</code> element represents a block of pre-formatted text, in which structure is represented by typographic conventions rather than by elements. Such examples are an e-mail (with paragraphs indicated by blank lines, lists indicated by lines prefixed with a bullet), fragments of computer code (with structure indicated according to the conventions of that language) or displaying <abbr title="American Standard Code for Information Interchange">ASCII</abbr> art. Here&#8217;s an example showing the printable characters of <abbr>ASCII</abbr>:</p>
            <div class="example">
<pre><samp>  ! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~ </samp></pre>
            </div>

            <h3>Blockquotes</h3>
            <p>The <code>blockquote</code> element represents a section that is being quoted from another source.</p>
            <div class="example">
                <blockquote cite="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">
                    <p>Many forms of Government have been tried, and will be tried in this world of sin and woe. No one pretends that democracy is perfect or all-wise. Indeed, it has been said that democracy is the worst form of government except all those other forms that have been tried from time to time.</p>
                </blockquote>
                <p>Winston Churchill, in <cite><a href="http://hansard.millbanksystems.com/commons/1947/nov/11/parliament-bill#column_206">a speech to the House of Commons</a></cite>. 11th November 1947</p>
            </div>
            <p>Additionally, you might wish to cite the source, as in the above example. The correct method involves including the <code>cite</code> attribute on the <code>blockquote</code> element, but since no browser makes any use of that information, it&#8217;s useful to link to the source also.</p>

            <h3>Ordered list</h3>
            <p>The <code>ol</code> element denotes an ordered list, and various numbering schemes are available through the CSS (including 1,2,3&#8230; a,b,c&#8230; i,ii,iii&#8230; and so on). Each item requires a surrounding <code>&lt;li&gt;</code> and <code>&lt;/li&gt;</code> tag, to denote individual items within the list (as you may have guessed, <code>li</code> stands for list item).</p>
            <div class="example">
                <ol>
                    <li>This is an ordered list.</li>
                    <li>
                        This is the second item, which contains a sub list
                        <ol>
                            <li>This is the sub list, which is also ordered.</li>
                            <li>It has two items.</li>
                        </ol>
                    </li>
                    <li>This is the final item on this list.</li>
                </ol>
            </div>

            <h3>Unordered list</h3>
            <p>The <code>ul</code> element denotes an unordered list (ie. a list of loose items that don&#8217;t require numbering, or a bulleted list). Again, each item requires a surrounding <code>&lt;li&gt;</code> and <code>&lt;/li&gt;</code> tag, to denote individual items. Here is an example list showing the constituent parts of the British Isles:</p>
            <div class="example">
                <ul>
                    <li>
                        United Kingdom of Great Britain and Northern Ireland:
                        <ul>
                            <li>England</li>
                            <li>Scotland</li>
                            <li>Wales</li>
                            <li>Northern Ireland</li>
                        </ul>
                    </li>
                    <li>Republic of Ireland</li>
                    <li>Isle of Man</li>
                    <li>
                        Channel Islands:
                        <ul>
                            <li>Bailiwick of Guernsey</li>
                            <li>Bailiwick of Jersey</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <p>Sometimes we may want each list item to contain block elements, typically a paragraph or two.</p>
            <div class="example">
                <ul>
                    <li>
                        <p>The British Isles is an archipelago consisting of the two large islands of Great Britain and Ireland, and many smaller surrounding islands.</p>
                    </li>
                    <li>
                        <p>Great Britain is the largest island of the archipelago. Ireland is the second largest island of the archipelago and lies directly to the west of Great Britain.</p>
                    </li>
                    <li>
                        <p>The full list of islands in the British Isles includes over 1,000 islands, of which 51 have an area larger than 20 km<sup>2</sup>.</p>
                    </li>
                </ul>
            </div>

            <h3>Definition list</h3>
            <p>The <code>dl</code> element is for another type of list called a definition list. Instead of list items, the content of a <code>dl</code> consists of <code>dt</code> (Definition Term) and <code>dd</code> (Definition description) pairs. Though it may be called a &#8220;definition list&#8221;, <code>dl</code> can apply to other scenarios where a parent/child relationship is applicable. For example, it may be used for marking up dialogues, with each <code>dt</code> naming a speaker, and each <code>dd</code> containing his or her words.</p>
            <div class="example">
                <dl>
                    <dt>This is a term.</dt>
                    <dd>This is the definition of that term, which both live in a <code>dl</code>.</dd>
                    <dt>Here is another term.</dt>
                    <dd>And it gets a definition too, which is this line.</dd>
                    <dt>Here is term that shares a definition with the term below.</dt>
                    <dt>Here is a defined term.</dt>
                    <dd><code>dt</code> terms may stand on their own without an accompanying <code>dd</code>, but in that case they <em>share</em> descriptions with the next available <code>dt</code>. You may not have a <code>dd</code> without a parent <code>dt</code>.</dd>
                </dl>
            </div>

            <h3>Figures</h3>
            <p>Figures are usually used to refer to images:</p>
            <div class="example">
                <figure>
                    <img src="http://lorempixum.com/680/400/abstract/?r" alt="Example image"/>
                    <figcaption>
                        <h4>Figure Heading</h4>
                        <p>This is a placeholder image, with supporting caption.</p>
                    </figcaption>
                </figure>
            </div>
            <p>Here, a part of a poem is marked up using figure:</p>
            <div class="example">
                <figure>
                    <p>&#8216;Twas brillig, and the slithy toves<br/>
                    Did gyre and gimble in the wabe;<br/>
                    All mimsy were the borogoves,<br/>
                    And the mome raths outgrabe.</p>
                    <figcaption>
                        <p><cite>Jabberwocky</cite> (first verse). Lewis Carroll, 1832-98</p>
                    </figcaption>
                </figure>
            </div>

            <h2 id="text">Text-level Semantics</h2>
            <p>There are a number of inline <abbr title="HyperText Markup Language">HTML</abbr> elements you may use anywhere within other elements.</p>

            <h3>Links and anchors</h3>
            <p>The <code>a</code> element is used to hyperlink text, be that to another page, a named fragment on the current page or any other location on the web. Example:</p>
            <div class="example">
                <p><a href="/">Go to the home page</a> or <a href="#banner">return to the top of this page</a>.</p>
            </div>

            <h3>Stressed emphasis</h3>
            <p>The <code>em</code> element is used to denote text with stressed emphasis, i.e., something you&#8217;d pronounce differently. Where italicizing is required for stylistic differentiation, the <code>i</code> element may be preferable. Example:</p>
            <div class="example">
                <p>You simply <em>must</em> try the negitoro maki!</p>
            </div>

            <h3>Strong importance</h3>
            <p>The <code>strong</code> element is used to denote text with strong importance. Where bolding is used for stylistic differentiation, the <code>b</code> element may be preferable. Example:</p> 
            <div class="example">
                <p><strong>Don&#8217;t</strong> stick nails in the electrical outlet.</p>
            </div>

            <h3>Small print</h3>
            <p>The <small>small</small> element is used to represent disclaimers, caveats, legal restrictions, or copyrights (commonly referred to as &#8216;small print&#8217;). It can also be used for attributions or satisfying licensing requirements. Example:</p>
            <div class="example">
                <p><small>Copyright &#169; 1922-2011 Acme Corporation. All Rights Reserved.</small></p>
            </div>

            <h3>Strikethrough</h3>
            <p>The <code>s</code> element is used to represent content that is no longer accurate or relevant. When indicating document edits i.e., marking a span of text as having been removed from a document, use the <code>del</code> element instead. Example:</p>
            <div class="example">
                <p><s>Recommended retail price: &#163;3.99 per bottle</s><br/><strong>Now selling for just &#163;2.99 a bottle!</strong></p>
            </div>

            <h3>Citations</h3>
            <p>The <code>cite</code> element is used to represent the title of a work (e.g. a book, essay, poem, song, film, TV show, sculpture, painting, musical, exhibition, etc). This can be a work that is being quoted or referenced in detail (i.e. a citation), or it can just be a work that is mentioned in passing. Example:</p>
            <div class="example">
                <p><cite>Universal Declaration of Human Rights</cite>, United Nations, December 1948. Adopted by General Assembly resolution 217 A (III).</p>
            </div>

            <h3>Inline quotes</h3>
            <p>The <code>q</code> element is used for quoting text inline. Example showing nested quotations:</p>
            <div class="example">
                <p>John said, <q>I saw Lucy at lunch, she told me <q>Mary wants you to get some ice cream on your way home</q>. I think I will get some at Ben and Jerry&#8217;s, on Gloucester Road.</q></p>
            </div>

            <h3>Definition</h3>
            <p>The <code>dfn</code> element is used to highlight the first use of a term. The <code>title</code> attribute can be used to describe the term. Example:</p>
            <div class="example">
                <p>Bob&#8217;s <dfn title="Dog">canine</dfn> mother and <dfn title="Horse">equine</dfn> father sat him down and carefully explained that he was an <dfn title="A mutation that combines two or more sets of chromosomes from different species">allopolyploid</dfn> organism.</p>
            </div>

            <h3>Abbreviation</h3>
            <p>The <code>abbr</code> element is used for any abbreviated text, whether it be acronym, initialism, or otherwise. Generally, it&#8217;s less work and useful (enough) to mark up only the first occurrence of any particular abbreviation on a page, and ignore the rest. Any text in the <code>title</code> attribute will appear when the user&#8217;s mouse hovers the abbreviation (although notably, this does not work in Internet Explorer for Windows). Example abbreviations:</p>
            <div class="example">
                <p><abbr title="British Broadcasting Corportation">BBC</abbr>, <abbr title="HyperText Markup Language">HTML</abbr>, and <abbr title="Staffordshire">Staffs.</abbr></p>
            </div>

            <h3>Time</h3>
            <p>The <code>time</code> element is used to represent either a time on a 24 hour clock, or a precise date in the proleptic Gregorian calendar, optionally with a time and a time-zone offset. Example:</p>
            <div class="example">
                <p>Queen Elizabeth II was proclaimed sovereign of each of the Commonwealth realms on <time datetime="1952-02-6">6</time> and <time datetime="1952-02-7">7 February 1952</time>, after the death of her father, King George VI.</p>
            </div>

            <h3>Code</h3>
            <p>The <code>code</code> element is used to represent fragments of computer code. Useful for technology-oriented sites, not so useful otherwise. Example:</p>
            <div class="example">
                <p>When you call the <code>activate()</code> method on the <code>robotSnowman</code> object, the eyes glow.</p>
            </div>
            <p>Used in conjunction with the <code>pre</code> element:</p>
            <div class="example">
<pre><code>function getJello() {
    echo $aDeliciousSnack;
}</code></pre>
            </div>
            <p>Shown with line numbers:</p>
            <div class="example">
                <ol class="code">
                    <li><code>&#60;?php </code></li>
                    <li class="tab1"><code>echo 'Hello World!';</code></li>
                    <li><code>?&#62;</code></li>
                </ol>
            </div>

            <h3>Variable</h3>
            <p>The <code>var</code> element is used to denote a variable in a mathematical expression or programming context, but can also be used to indicate a placeholder where the contents should be replaced with your own value. Example:</p>
            <div class="example">
                <p>If there are <var>n</var> pipes leading to the ice cream factory then I expect at <em>least</em> <var>n</var> flavours of ice cream to be available for purchase!</p>
            </div>

            <h3>Sample output</h3>
            <p>The <code>samp</code> element is used to represent (sample) output from a program or computing system. Useful for technology-oriented sites, not so useful otherwise. Example:</p>
            <div class="example">
                <p>The computer said <samp>Too much cheese in tray two</samp> but I didn&#8217;t know what that meant.</p>
            </div>

            <h3>Keyboard entry</h3>
            <p>The <code>kbd</code> element is used to denote user input (typically via a keyboard, although it may also be used to represent other input methods, such as voice commands). Example:<p>
            <div class="example">
                <p>To take a screenshot on your Mac, press <kbd>&#8984; Cmd</kbd> + <kbd>&#8679; Shift</kbd> + <kbd>3</kbd>.</p>
            </div>

            <h3>Superscript and subscript text</h3>
            <p>The <code>sup</code> element represents a superscript and the sub element represents a <code>sub</code>. These elements must be used only to mark up typographical conventions with specific meanings, not for typographical presentation. As a guide, only use these elements if their absence would change the meaning of the content. Example:</p>
            <div class="example">
                <p>The coordinate of the <var>i</var>th point is (<var>x<sub><var>i</var></sub></var>, <var>y<sub><var>i</var></sub></var>). For example, the 10th point has coordinate (<var>x<sub>10</sub></var>, <var>y<sub>10</sub></var>).</p>
                <p>f(<var>x</var>, <var>n</var>) = log<sub>4</sub><var>x</var><sup><var>n</var></sup></p>
            </div>

            <h3>Italicised</h3>
            <p>The <code>i</code> element is used for text in an alternate voice or mood, or otherwise offset from the normal prose. Examples include taxonomic designations, technical terms, idiomatic phrases from another language, the name of a ship or other spans of text whose typographic presentation is typically italicised. Example:</p>
            <div class="example">
                <p>There is a certain <i lang="fr">je ne sais quoi</i> in the air.</p>
            </div>

            <h3>Emboldened</h3>
            <p>The <code>b</code> element is used for text stylistically offset from normal prose without conveying extra importance, such as key words in a document abstract, product names in a review, or other spans of text whose typographic presentation is typically emboldened. Example:</p>
            <div class="example">
                <p>You enter a small room. Your <b>sword</b> glows brighter. A <b>rat</b> scurries past the corner wall.</p>
            </div>
            
            <h3>Marked or highlighted text</h3>
            <p>The <code>mark</code> element is used to represent a run of text marked or highlighted for reference purposes. When used in a quotation it indicates a highlight not originally present but added to bring the reader&#8217;s attention to that part of the text. When used in the main prose of a document, it indicates a part of the document that has been highlighted due to its relevance to the user&#8217;s current activity. Example:</p>
            <div class="example">
                <p>I also have some <mark>kitten</mark>s who are visiting me these days. They&#8217;re really cute. I think they like my garden! Maybe I should adopt a <mark>kitten</mark>.</p>
            </div>

            <h3 id="edits">Edits</h3>
            <p>The <code>del</code> element is used to represent deleted or retracted text which still must remain on the page for some reason. Meanwhile its counterpart, the <code>ins</code> element, is used to represent inserted text. Both <code>del</code> and <code>ins</code> have a <code>datetime</code> attribute which allows you to include a timestamp directly in the element. Example inserted text and usage:</p>
            <div class="example">
                <p>She bought <del datetime="2005-05-30T13:00:00">two</del> <ins datetime="2005-05-30T13:00:00">five</ins> pairs of shoes.</p>
            </div>

            <h2 id="tables">Tabular data</h2>
            <p>Tables should be used when displaying tabular data. The <code>thead</code>, <code>tfoot</code> and <code>tbody</code> elements enable you to group rows within each a table.</p>
            <p>If you use these elements, you must use every element. They should appear in this order: <code>thead</code>, <code>tfoot</code> and <code>tbody</code>, so that browsers can render the foot before receiving all the data. You must use these tags within the table element.</p>
            <div class="example">
                <table>
                    <caption>The Very Best Eggnog</caption>
                    <colgroup>
                        <col style="width:15em;" />
                        <col style="width:6em;" />
                        <col style="width:6em;" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th scope="col">Ingredients</th>
                            <th scope="col">Serves 12</th>
                            <th scope="col">Serves 24</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Milk</td>
                            <td>1 quart</td>
                            <td>2 quart</td>
                        </tr>
                        <tr>
                            <td>Cinnamon Sticks</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Vanilla Bean, Split</td>
                            <td>1</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Cloves</td>
                            <td>5</td>
                            <td>10</td>
                        </tr>
                        <tr>
                            <td>Mace</td>
                            <td>10 blades</td>
                            <td>20 blades</td>
                        </tr>
                        <tr>
                            <td>Egg Yolks</td>
                            <td>12</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>Cups Sugar</td>
                            <td>1 &frac12; cups</td>
                            <td>3 cups</td>
                        </tr>
                        <tr>
                            <td>Dark Rum</td>
                            <td>1 &frac12; cups</td>
                            <td>3 cups</td>
                        </tr>
                        <tr>
                            <td>Brandy</td>
                            <td>1 &frac12; cups</td>
                            <td>3 cups</td>
                        </tr>
                        <tr>
                            <td>Vanilla</td>
                            <td>1 tbsp</td>
                            <td>2 tbsp</td>
                        </tr>
                        <tr>
                            <td>Half-and-half or Light Cream</td>
                            <td>1 quart</td>
                            <td>2 quart</td>
                        </tr>
                        <tr>
                            <td>Freshly grated nutmeg to taste</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h2 id="forms">Forms</h2>
            <p>Forms can be used when you wish to collect data from users. The <code>fieldset</code> element enables you to group related fields within a form, and each one should contain a corresponding <code>legend</code>. The <code>label</code> element ensures field descriptions are associated with their corresponding form widgets.</p>
            <div class="example">
                <form action="#">
                    <fieldset>
                        <legend>Legend</legend>
                        <div>
                            <label for="text">Text Input <abbr title="Required">*</abbr></label>
                            <input id="text" type="text" class="field"/>
                            <em>Note about this field</em>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input id="password" type="password" class="field"/>
                            <em>Note about this field</em>
                        </div>
                        <div>
                            <label for="textarea">Textarea</label>
                            <textarea id="textarea" class="field" rows="8" cols="48"></textarea>
                            <em class="clear">Note about this field</em>
                        </div>
                        <div>
                            <label for="select">Select</label>
                            <select id="select">
                                <optgroup label="Option Group">
                                    <option>Option One</option>
                                    <option>Option Two</option>
                                    <option>Option Three</option>
                                </optgroup>
                            </select>
                            <em>Note about this selection</em>
                        </div>
                        <div>
                            <label for="checkbox" class="check"><input id="checkbox" type="checkbox" class="checkbox"/> Label</label>
                        </div>
                        <fieldset class="options">
                            <label for="checkbox">Checkbox <abbr title="Required">*</abbr></label>
                            <ul>
                                <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked" /> Choice A</label></li>
                                <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox" /> Choice B</label></li>
                                <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox" /> Choice C</label></li>
                            </ul>
                        </fieldset>
                        <fieldset class="options">
                            <label for="radio">Radio</label>
                            <ul>
                                <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked" /> Option 1</label></li>
                                <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio" /> Option 2</label></li>
                            </ul>
                        </fieldset>
                        <div class="submit">
                            <input type="submit" value="Post Comment" />
                            <input type="button" value="Preview" />
                        </div>
                    </fieldset>
                </form>
            </div>

            <small>Parts of this markup guide attributable to <a href="http://www.mezzoblue.com/">Dave Shea</a>, and licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.0/uk/">Creative Commons License</a>.</small>
        </div><!--/main-->

    </div><!--/document-->
</body>
</html>