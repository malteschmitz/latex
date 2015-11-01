<div class="page-header">
  <h1 id="abschlussarbeiten">Abschlussarbeiten setzen</h1>
</div>

<p class="lead">Wie schreibe ich meine Bachelorarbeit in LaTeX?</p>

<p>Der Vortrag erklärt, wie mit den Kenntnissen aus dem Einführungsvortrag umfangreichere Dokumente wie zum Beispiel eine Abschlussarbeit gesetzt werden können. Wir führen dazu zunächst in die Verwendung des Farbsystems von LaTeX ein und beschreiben anschließend den Satz von Quelltext, Pseudocode, Theoremen und Beweisen.</p>

<p>Im Hauptteil des Vortrags geht es dann um die Strukturierung umfangreicher Dokumente. Wie erklären, wie die Titelseite einer Arbeit gestaltet wird und wie die Kopfzeile einer Arbeit so konfiguriert wird, dass das aktuelle Kapitel als lebender Kolumnentitel angezeigt wird. Hierzu stellen wir das Paket KOMA-Script vor, das sich insbesondere im deutschen Sprachraum einer großen Beliebtheit erfreut. Dabei besprechen wir auch die Konfiguration des Satzspiegels, also der Seitenränder, sodass auch ausreichend Platz für Kopf- und Fußzeilen bleiben. Wir zeigen, wie die Seiten- und Kapitelnummerierung korrekt an die verschiedenen Abschnitte einer Arbeit (erste Seiten, Hauptteil, Verzeichnisse und Anhang) angepasst wird. Schließlich schlagen wir einen Weg vor, wie umfangreiche Dokumente in verschiedenen Dateien organisiert werden können, sodass man auch bei längeren Texten immer den Überblick behält.</p>

<p>Im letzten Teil dieses Vortrags wird eine essenziell wichtige Technik für wissenschaftliche Arbeiten beschrieben: Das korrekte Zitieren, der Satz eines Literaturverzeichnisses und die Verwaltung einer Literaturdatenbank mit BibTeX.</p>

<p><strong>Voraussetungen:</strong> Es werden grundlegende Kenntnisse von LaTeX vorausgesetzt, wie sie zum Beispiel im Einführungsvortrag vermittelt werden.</p>

<h2 id="abschlussarbeiten-folien">Folien</h2>

<p>Die Folien des Vortrags können hier im PDF-Format heruntergeladen werden. Der Quelltext der Vorträge selber befindet sich bei <a href="https://github.com/malteschmitz/latex">Github</a>.</p>

<p>
  <a href="advanced.pdf" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-download"></span> Folien herunterladen</a>
</p>

<h2 id="abschlussarbeiten-dokumentenelemente">Dokumentenelemente</h2>

<h3>Farben definieren</h3>

<p><span class="label label-primary">REGIE</span> Anpassungen in <code>gummibaerchen.tex</code> machen.</p>

<pre class="sh_latex">In diesem \colorbox{orange}{Text} sind
\textcolor{orange}{Worte} hervorgehoben.</pre>

<p><span class="label label-primary">REGIE</span> <code>schema-color.tex</code> zeigen.</p>

<pre class="sh_latex">In diesem \colorbox{maincolor!10}{Text} sind
\textcolor{maincolor}{Worte} hervorgehoben.</pre>

<p><span class="label label-info">FOLIEN</span> Verschiedene Farbmodelle</p>

<h3>Quelltext und Pseudocode</h3>

<p>Quelltext am Beispiel von Java:</p>

<pre class="sh_latex">\begin{lstlisting}[language=Java,gobble=2]
  public class Main {
    // Hello Word in Java
    public static void main(String[] args) {
      System.out.println("Hello World");
    }
  }
\end{lstlisting}</pre>

<p>Pseudocode am Beispiel einer sinnlosen Schleife:</p>

<pre class="sh_latex">\begin{lstlisting}[style=pseudo,gobble=2]
  // Schleife von 1 bis 5
    for $i \gets 1$ to $5$ do
      while $S[i] \neq S[S[i]]$ do
        $S[i] \gets S[S[i]]$
\end{lstlisting}</pre>

<p><span class="label label-info">FOLIEN</span> Einstellungen in der Präambel</p>

<h3>Theoreme</h3>

<pre class="sh_latex">\begin{definition}[Sandhaufen]
  Ein \emph{Sandhaufen} ist ...
\end{definition}

\begin{theorem}[Sandhaufensatz]
  Es gibt keine Sandhaufen.
\end{theorem}

\begin{proof}
  ... Induktiv folgt die Aussage.
\end{proof}

\begin{remark}
  Das ist alles Quatsch.
\end{remark}</pre>

<p><span class="label label-info">FOLIEN</span> Typische Arten von Theoremen</p>

<p>Auf Theoreme verweisen</p>

<pre class="sh_latex">Wir beginnen mit einige Lemmata.

\begin{lemma}
  \label{lemma:easy}
  \LaTeX\ ist einfach.
\end{lemma}

\begin{proof}
  Jeder kann es lernen.
\end{proof}

\begin{lemma}
  \label{lemma:fun}
  \LaTeX\ macht Spaß.
\end{lemma}

\begin{proof}
  \FiveFlowerOpen
\end{proof}

Nun folgt die Kernaussage der Arbeit.

\begin{theorem}
  \label{thm-love}
  Alle lieben \LaTeX.
\end{theorem}

\begin{proof}
  Folgt mit \autoref{lemma:easy}
  und \autoref{lemma:fun}.
\end{proof}|\pause|

Aus diesem Theorem folgen weitere praktische Erkenntnisse.

\begin{corollary}
  \LaTeX\ ist gut.
\end{corollary}

\begin{proof}
  Folgt aus \autoref{thm-love}.
\end{proof}</pre>

<p><span class="label label-info">FOLIEN</span> Einstellungen in der Präambel</p>

<h2 id="abschlussarbeiten-strukturierung">Strukturierung</h2>

<h3>Abbildungen und Verweise</h3>

<p>Fließumgebung:</p>

<pre class="sh_latex">\begin{figure}
  \centering
  \includegraphics[width=6cm]{flower}
  \caption{Ein Beispiel.}
  \label{fig:flower}
\end{figure}</pre>

<p>Eine Fließumgebung kann referenziert werden:</p>

<pre class="sh_latex">Der AD aus MG nimmt diesen Blindtext aus \autoref{fig:flower} als Filet.</pre>


<h3>Titelseite</h3>

<p><span class="label label-info">FOLIEN</span> Techniken zur freien Gestaltung einer Titelseite</p>

<p><span class="label label-primary">REGIE</span> <code>title.tex</code> zeigen.</p>


<h3>Kopf- und Fußzeilen</h3>

<p><span class="label label-info">FOLIEN</span> Techniken zur Gestaltung von Kopf- und Fußzeilen</p>

<p><span class="label label-primary">REGIE</span> <code>style.tex</code> zeigen.</p>

<p>Bereits vorhandene Stilanpassungen:</p>

<pre class="sh_latex">% header and footer
\usepackage{scrpage2}
\pagestyle{scrheadings}
\setkomafont{pagenumber}{\normalfont\sffamily\color{maincolor}}
\setkomafont{pageheadfoot}{\normalfont\sffamily}
\setheadsepline{0.5pt}[\color{maincolor}]</pre>

<p>Ohne Anpassungen ist wird das aktuelle Kapitel als linker Kolumnentitel und der aktuelle Abschnitt als rechter Kolumnentitel gesetzt.</p>

<p>Kopf- und Fußzeile auf geraden und ungeraden Seiten gleich:</p>

<pre class="sh_latex">% Alles löschen
\clearscrheadfoot

% Kapitel und Abschnitt immer oben mittig
\lehead{\leftmark{} | \rightmark}
\lohead{\leftmark{} | \rightmark}
% Seitenzahl immer unten mittig
\cfoot[-- \pagemark{} --]{Seite \pagemark}</pre>

<p>Man beachte im Ergebnis den Unterschied der Seitenzahl auf ersten Seiten eines Kapitels (<code>scrplain</code>) und den restlichen Seiten eines Kapitels (<code>scrheadings</code>).</p>

<h3>Abschnitte</h3>

<p><span class="label label-info">FOLIEN</span> Abschnitte langer Dokumente</p>

<p><span class="label label-primary">REGIE</span> In <code>thesis.tex</code> die anderen Abschnitte einbinden.</p>

<h3>Dateien einbinden</h3>

<p><span class="label label-info">FOLIEN</span> Dateien einbinden</p>

<p>Am Ende der Präambel ergänzen:</p>

<pre class="sh_latex">\includeonly{title}</pre>

<p>Man beachte, dass im Ergebnis der Inhalt fehlt, das Inhalts- und Literaturverzeichnis aber noch vollständig sind, da die Informationen aus den vorhandenen <code>aux</code>-Dateien weiter verwendet werden.</p>

<h2 id="abschlussarbeiten-literaturverzeichnisse">Literaturverzeichnisse</h2>

<p><span class="label label-info">FOLIEN</span> Literaturverzeichnisse</p>

<p><span class="label label-primary">REGIE</span> Verschiedene Arten von Literatur in <code>literature.bib</code> zeigen.</p>

<p><span class="label label-info">FOLIEN</span> Typische BibTeX-Stile</p>

<h2 id="abschlussarbeiten-zusammenfassung">Zusammenfassung</h2>

<p><span class="label label-info">FOLIEN</span> Zusammenfassung.</p>

<h2 id="abschlussarbeiten-zum-weiterlesen">Zum Weiterlesen</h2>

<p>Markus Kohm, Jens-Uwe-Morawski.<br>
<em>KOMA-Script</em>,<br>
<a href="http://mirrors.ctan.org/macros/latex/contrib/koma-script/doc/scrguide.pdf"><tt>scrguide.pdf</tt></a>, Juli 2012.</p>

<p>Uwe Kern.<br>
<em>Farbspielereien in LaTeX mit dem <tt>xcolor</tt>-Paket</em>,<br>
Die TeXnische Komödie 2/2004, S. 35&ndash;53,<br>
<a href="http://jochen-lipps.de/latex/dtk200402.pdf"><tt>dtk200402.pdf</tt></a>.</p>

<p>Ullrich Schwarz.<br>
<em>Thmtools Users' Guide</em>,<br>
<a href="http://mirrors.ctan.org/macros/latex/exptl/thmtools/thmtools.pdf"><tt>thmtools.pdf</tt></a>, April 2014.</p>

<p>Klaus Braune, Joachim und Marion Lammarsch.<br>
<em>LATEX: Basissystem, Layout, Formelsatz</em>,<br>
Addison-Wesley, Mai 2006.</p>

<p>Helmut Kopka.<br>
<em>LATEX, Band 1: Einführung,</em><br>
Addison-Wesley, März 2002.</p>

<p>Helmut Kopka.<br>
<em>LATEX, Band 2: Ergänzungen,</em><br>
Addison-Wesley, Mai 2002.</p>          

<p>Carsten Heinz, Brooks Moses, Jobst Hoffmann.<br>
<em>The Listings Package</em>,<br>
<a href="http://mirrors.ctan.org/macros/latex/contrib/listings/listings.pdf"><tt>listings.pdf</tt></a>, August 2013.</p>

<p>Palle Jørgensen.<br>
<em>The LaTeX Font Catalogue</em>,<br>
<a href="http://www.tug.dk/FontCatalogue/"><tt>tug.dk/FontCatalogue</tt></a>, 2012.</p>

<h3>Zum Weiterlesen für maximal Interessierte</h3>

<p>Donald E. Knuth.<br>
<em>The TeXbook</em>,<br>
Addison-Wesley Professional, Januar 1984.</p>

<p>Victor Eijkhout.<br>
<em>TeX by Topic: A TeXnician’s Reference</em>,<br>
Addison-Wesley, Februar 1992.</p>

<p>Friedrich Forssman, Ralf de Jong.<br>
<em>Detailtypografie: Nachschlagewerk für alle Fragen zu Schrift und Satz</em>,<br>
Schmidt (Hermann), Mainz, 4. Auflage, Juni 2004.</p>

<p>Friedrich Forssman, Hans Peter Willberg.<br>
<em>Lesetypografie</em>,<br>
Verlag Hermann Schmidt, Mainz, Oktober 2005.</p>

<h2 id="abschlussarbeiten-beispieldokumente">Beispieldokumente</h2>

<ul>
  <li>[<a href="examples/farbe.tex">TEX</a>] [<a href="examples/farbe.pdf">PDF</a>] Farbe</li>
  <li>[<a href="examples/befehle.tex">TEX</a>] [<a href="examples/befehle.pdf">PDF</a>] Eigene Befehle und Umgebungen</li>
  <li>[<a href="examples/quelltext.tex">TEX</a>] [<a href="examples/quelltext.pdf">PDF</a>] Quelltext und Pseudocode</li>
  <li>[<a href="examples/literatur.tex">TEX</a>] [<a href="examples/literatur.bib" title="Literaturdatenbank">BIB</a>] [<a href="examples/literatur.pdf">PDF</a>] Literaturverzeichnis</li>
  <li>[<a href="examples/kopfzeile-default.tex">TEX</a>] [<a href="examples/kopfzeile-default.pdf">PDF</a>] Normale Kopfzeile</li>
  <li>[<a href="examples/kopfzeile-mittig.tex">TEX</a>] [<a href="examples/kopfzeile-mittig.pdf">PDF</a>] Zentrierte Kopfzeile</li>
  <li>[<a href="examples/kopfzeile-links.tex">TEX</a>] [<a href="examples/kopfzeile-links.pdf">PDF</a>] Linksbündige Kopfzeile</li>
  <li>[<a href="examples/kopfzeile-ultimativ.tex">TEX</a>] [<a href="examples/kopfzeile-ultimativ.pdf">PDF</a>] Aufwändigere Kopfzeile</li>
  <li>[<a href="examples/include/">Ordner</a>] Abschnitte und modulare Dokumente</li>
</ul>