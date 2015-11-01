<div class="page-header">
  <h1 id="einfuehrung">Einführung</h1>
</div>

<p class="lead">Einführung in die Verwendung von LaTeX</p>

<p>LaTeX ist ein Softwarepaket, das es ermöglicht, Dokumente auf einfache Art und Weise professionell zu setzen. Wir beginnen ganz am Anfang und benutzen LaTeX um schrittweise ein Beispiel-Dokumentzu erstellen.</p>

<p>Beim Textsatz mit LaTeX wird der zu setzende Text durch logisches textuelles Markup ergänzt. Anhand von einfachen Beispielen zeigen wir, wie LaTeX-Befehle und -Umgebungen funktionieren. Um ein längeres Dokument zu gliedern werden neben dem eigentlichen Titel des Dokumentes weitere Überschriften für die einzelne Abschnitte verwendet. Wir erläutern, wie Titel und Überschriften in LaTeX gesetzt werden und wie aus den Überschriften automatisch ein Inhaltsverzeichnis generiert werden kann.</p>

<p>Im weiteren Verlauf verwenden wir typische Elemente eines Dokumentes wie zum Beispiel Listen und Tabellen. Darüber hinaus besprechen wir eine der großen Stärken von LaTeX, den einfachen Satz von komplexen mathematischen Formeln. Schließlich zeigen wir, wie externe Grafiken in Dokumente eingebunden werden.</p>

<p><strong>Voraussetzungen.</strong> Es werden grundlegende Kenntnisse im Umgang mit Computern erwartet ;)</p>

<h2 id="einfuehrung-folien">Folien</h2>

<p>Die Folien des Vortrags können hier im PDF-Format heruntergeladen werden. Der Quelltext der Vorträge selber befindet sich bei <a href="https://github.com/malteschmitz/latex">Github</a>.</p>

<p>
  <a href="basic.pdf" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-download"></span> Folien herunterladen</a>
</p>

<h2 id="einfuehrung-was-ist-latex">Was ist LaTeX?</h2>

<p><span class="label label-info">FOLIEN</span> Was ist LaTeX und wann wird es eingesetzt?</p>

<h3>Distributionen</h3>

<ul>
  <li><a href="http://miktex.org/">MikTeX</a></li>
  <li><a href="http://www.tug.org/texlive/">TeX Live</a>
    <ul>
      <li><a href="http://wiki.ubuntuusers.de/Tex_Live">Mit Paketmanager unter Ubuntu</a></li>
      <li><a href="https://geofs.uni-muenster.de/geoinf/doku.php?id=tex-ecke:installation">Ohne Paketmanager unter Ubuntu</a></li>
    </ul>
  </li>
  <li><a href="http://tug.org/mactex/">MacTeX</a></li>
</ul>

<h3>Editoren</h3>

<ul>
  <li><a href="http://notepad-plus-plus.org/">Notepad++ (Windows)</a></li>
  <li><a href="http://de.wikipedia.org/wiki/Gedit">GEdit (Linux)</a></li>
  <li><a href="http://www.sublimetext.com/">Sublime Text (Windows, Linux, Mac)</a> mit <a href="https://github.com/SublimeText/LaTeXTools">LaTeX Tools</a></li>
</ul>

<h3>Integrierte Umgebungen (IDEs)</h3>
<ul>
  <li><a href="http://de.wikipedia.org/wiki/TeXworks">TeXworks (Windows, Linux, Mac)</a>
    <ul>
      <li>in MiKTeX, TeX Live und MacTeX enthalten</li>
    </ul>
  </li>
  <li><a href="http://de.wikipedia.org/wiki/TeXShop">TeXshop (Mac)</a>
    <ul>
      <li>Apple Design Award 2002</li>
      <li>in MacTeX enthalten</li>
    </ul>
  </li>
  <li><a href="http://de.wikipedia.org/wiki/Kile_(Software)">Kile (Linux)</a></li>
  <li><a href="http://www.xm1math.net/texmaker/">Texmaker (Windows, Linux, Mac)</a></li>
  <li><a href="http://texstudio.sourceforge.net/">TeXstudio (Windows, Linux, Mac)</a></li>
  <li><a href="http://www.texniccenter.org/">TeXnicCenter (Windows)</a></li>
</ul>

<h2 id="einfuehrung-latex-verwenden">LaTeX verwenden</h2>

<pre class="sh_latex">\documentclass{easyarticle}

\begin{document}
  Hallo Welt
\end{document}</pre>

<p><span class="label label-default">DOWNLOAD</span> Damit dieses Beispiel funktioniert, muss <code><a href="easyarticle.cls">easyarticle.cls</a></code> vorhanden sein.</p>

<h3>Leerzeichen und Umbrüche</h3>

<p><span class="label label-primary">REGIE</span> Texte aus <code>blindtext.txt</code> übernehmen.</p>

<ul>
  <li>Zusätzliche Leerzeichen werden ignoriert.</li>
  <li>Zeilenumbrüche werden ignoriert.</li>
</ul>

<p><strong>Absatz</strong></p>
<ul>
  <li>Absatz: leere Zeile in der Eingabe</li>
  <li>Aussehen variiert je nach Einstellungen.</li>
</ul>

<p><strong>Manueller Zeilenumbruch</strong></p>
<ul>
  <li>Zeilenumbruch: <code>\\</code></li>
  <li>Ist hässlich und stört den Lesefluss.</li>
</ul>

<h3>Auszeichnungen</h3>
<pre class="sh_latex">Freilebende \textbf{Gummibärchen} \emph{gibt es nicht}.

Man kauft sie in \textsc{Packungen}.

Nun sind \textcolor{orange}{Gummibärchen} weder wabbelig noch zäh.</pre>

<h3>Zentrieren, Zitieren und Fußnoten</h3>
<pre class="sh_latex">Und wie man damit umgeht: \enquote{Mensch erkenne dich selbst!}

\begin{center}
  Nun sind Gummibärchen weder wabbelig noch zäh; sie stehen genau
  an der Grenze. Auch das macht sie spannend. Gummibärchen sind
  auf eine aufreizende Art weich. Und da sie weich sind, kann
  man sie auch ziehen. Ich mache das sehr gerne.
\end{center}

\begin{quote}
  Im Gegensatz zu anderen Textverarbeitungsprogrammen, die nach
  dem What-you-see-is-what-you-get-Prinzip funktionieren,
  arbeitet der Autor mit Textdateien, in denen er innerhalb
  eines Textes anders zu formatierende Passagen oder Überschriften
  mit Befehlen textuell auszeichnet.\footnote{Wikipedia
  über LaTeX}
\end{quote}</pre>

<h3>Befehle und Umgebungen</h3>

<p><span class="label label-info">FOLIEN</span> Zusammenfassung der Syntax von Befehlen und Umgebungen.</p>

<h3>Abschnitte</h3>

<p><span class="label label-primary">REGIE</span> Mehr Texte aus <code>blindtext.txt</code> übernehmen.</p>

<pre class="sh_latex">\section{Gummibärchen}

\subsection{Forscherdrang}

\section{Der Blindtext-Fall}

\section{Weit hinter den Wortbergen}</pre>

<h3>Inhaltsverzeichnis</h3>

<pre class="sh_latex">\tableofcontents</pre>

<p>Manchmal will man eine Überschrift im Inhaltsverzeichnis verkürzt darstellen:</p>

<pre class="sh_latex">\subsection[Im Kino]{Am Ende landet das ganze wie immer im Kino}</pre>

<h3>Titel und Autor</h3>

<pre class="sh_latex">\title{Verschiedene Blindtexte}
\author{Malte Schmitz}
\date{Winter 2015}
\maketitle</pre>

<h3>Mathematik</h3>

<p><span class="label label-primary">REGIE</span> Text aus <code>pythagoras.txt</code> übernehmen.</p>

<p>Inline:</p>
<pre class="sh_latex">Es gilt $a^2 + b^2 = c^2$.</pre>

<p>Abgesetzt:</p>
<pre class="sh_latex">Darüber hinaus gilt $\alpha^{22} + \beta_{12} = \gamma^2_a$.
Anschließend wenden wir
\[ \sum^n_{i=1}i = \frac{n(n+1)}2 \]
an, was auch als Summenformel bekannt ist.</pre>

<p>Mehrere Zeilen gemeinsam ausgerichtet:</p>

<pre class="sh_latex">Es gilt
\begin{align*}
  \sqrt{x^4} &= x^2\\
  \lim_{n\to\infty} \frac 1{n^2} &= 0 \\
  \int_{-1}^2 x\, \mathrm{d}x &= \left[ \frac12 x^2 \right]_1^2
\end{align*}</pre>

<h3>Listen</h3>

<p>Aufzählungen:</p>

<pre class="sh_latex">Anführen sollte man auch noch: 
\begin{enumerate}
  \item Manche mögen die Grünen am liebsten,
  \item manche die Gelben.
  \item Ich mag am liebsten die Roten.
  \begin{enumerate}
    \item Sie glühen richtig rot,
    \item und ihr Himbeergeschmack fährt wie Napalm über
      die Geschmacksknospen.
  \end{enumerate}
\end{enumerate}</pre>

<p>Unsortierte Aufzählungen:</p>

<pre class="sh_latex">\begin{itemize}
  \item Hier schläft die gesteigerte Intensität.
  \item So spiegelt sich eine menschliche Love-Affair wider.
  \item Nie wieder Gummibärchen, denke ich jedesmal.
  \item Gummibärchen sind Spitze.
\end{itemize}</pre>

<p>Definitionslisten:</p>

<pre class="sh_latex">\begin{description}
  \item[Das Schlagwort] steht am Anfang einer Zeile und wird
    hervorgehoben, während der zugehörige
  \item[Text] dahinter in normaler Schrift erscheint.
\end{description}</pre>

<h3>Tabellen</h3>  

<p>Die eigentliche Tabelle:</p>

<pre class="sh_latex">\begin{tabular}{l|lr}
  \textbf{Jahr} & \textbf{Prozessor} & \textbf{MHz} \\ \hline
  1975 & 6502 (C64) & 1 \\
  1985 & 80386 & 16 \\
  2005 & Pentium 4 & 2\,800 \\
  2030 & Phoenix 3 & 7\,320\,000
\end{tabular}</pre>

<p>Fließumgebungen werden frei im Text positioniert:</p>

<pre class="sh_latex">\begin{table}
  \centering
  \begin{tabular}{l|lr}
    \textbf{Jahr} & \textbf{Prozessor} & \textbf{MHz} \\ \hline
    1975 & 6502 (C64) & 1
  \end{tabular}
  \caption{Und weiter?}
  \label{tab:prozessoren}
\end{table}</pre>

<p>Über das Label kann die Tabelle referenziert werden:</p>

<pre class="sh_latex">Welch eine Haltung in \autoref{tab:prozessoren} dargestellt wird.</pre>

<h3>Abbildungen</h3>  

<p>Die eigentliche Grafik:</p>

<pre class="sh_latex">\includegraphics[width=6cm]{flower}</pre>

<p>Genau wie bei den Tabellen die dazu passende Fließumgebung:</p>

<pre class="sh_latex">\begin{figure}
  \centering
  \includegraphics[width=6cm]{flower}
  \caption{Ein Beispiel.}
  \label{fig:flower}
\end{figure}</pre>

<p>Eine Abbildung kann genau wie eine Tabelle referenziert werden:</p>

<pre class="sh_latex">Der AD aus MG nimmt diesen Blindtext aus \autoref{fig:flower} als Filet.</pre>

<h2 id="einfuehrung-aufbau">Aufbau und Präambel</h2>

<p><span class="label label-info">FOLIEN</span> Struktur eines Dokumentes und Elemente der Präambel</p>

<h3>Die wahre Präambel</h3>

<pre class="sh_latex">\documentclass{scrartcl}

% input encoding
\usepackage[utf8]{inputenc}

% new german spelling
\usepackage[ngerman]{babel}

% choose font
\usepackage[T1]{fontenc}
\usepackage{lmodern}

% KOMA-Script options
\KOMAoptions{%
  parskip=full,%
  fontsize=12pt,
  DIV=calc}

% color and images
\usepackage{xcolor}
\usepackage{graphicx}

% quotes
\usepackage[german=guillemets]{csquotes}

% math
\usepackage{amsmath}
\usepackage{amssymb}

% set special behaviour for hyperlinks in pdfs
\usepackage[breaklinks=true]{hyperref}</pre>

<h2 id="einfuehrung-zusammenfassung">Zusammenfassung</h2>

<p><span class="label label-info">FOLIEN</span> Zusammenfassung.</p>

<h2 id="einfuehrung-zum-weiterlesen">Zum Weiterlesen</h2>

<p>Markus Kohm, Jens-Uwe-Morawski.<br>
<em>KOMA-Script</em>,<br>
<a href="http://mirrors.ctan.org/macros/latex/contrib/koma-script/doc/scrguide.pdf"><tt>scrguide.pdf</tt></a>, Juli 2012.</p>

<p>Wikibooks contributors.<br>
<em>LaTeX Wikibook</em>,<br>
<a href="http://en.wikibooks.org/wiki/LaTeX"><tt>en.wikibooks.org/wiki/LaTeX</tt></a>, November 2014.</p>

<p>Helmut Kopka.<br>
<em>LATEX, Band 1: Einführung,</em><br>
Addison-Wesley, März 2002.</p>

<p>Klaus Braune, Joachim und Marion Lammarsch.<br>
<em>LATEX: Basissystem, Layout, Formelsatz</em>,<br>
Addison-Wesley, Mai 2006.</p>

<p>Werner Struckmann.<br>
<em>Einige typographische Grundregeln und ihre Umsetzung in LATEX</em>,<br>
<a href="http://www2.informatik.hu-berlin.de/sv/lehre/typographie.pdf"><tt>typographie.pdf</tt></a>, September 2007.</p>

<p>Sebastian Rahtz, Heiko Oberdiek.<br>
<em>Hypertext marks in LaTeX: a manual for <tt>hyperref</tt></em>,<br>
<a href="http://mirrors.ctan.org/macros/latex/contrib/hyperref/doc/manual.pdf"><tt>manual.pdf</tt></a>, November 2012.</p>

<p>Scott Pakin.<br>
<em>The Comprehensive LaTeX Symbol List</em>,<br>
<a href="http://mirrors.ctan.org/info/symbols/comprehensive/symbols-a4.pdf"><tt>symbols-a4.pdf</tt></a>, November 2009</p>

<p>Philipp Kühl, Daniel Kirsch.<br>
<em>Detexify<sup>2</sup> &ndash; LaTeX symbol classifier</em>,<br>
<a href="http://detexify.kirelabs.org"><tt>detexify.kirelabs.org</tt></a></p>

<h2 id="einfuehrung-beispieldokumente">Beispieldokumente</h2>

<ul>
  <li>[<a href="examples/dokument.tex">TEX</a>] [<a href="examples/dokument.pdf">PDF</a>] Einfaches Dokument mit Titel und Inhaltsverzeichnis</li>
  <li>[<a href="examples/sonderzeichen.tex">TEX</a>] [<a href="examples/sonderzeichen.pdf">PDF</a>] Sonderzeichen</li>
  <li>[<a href="examples/mathematik.tex">TEX</a>] [<a href="examples/mathematik.pdf">PDF</a>] Formelsatz</li>
  <li>[<a href="examples/struktur.tex">TEX</a>] [<a href="examples/miktex.png" title="Verwendetes Bild">PNG</a>] [<a href="examples/struktur.pdf">PDF</a>] Listen, Tabellen und Grafiken</li>
  <li>[<a href="examples/abbildungen.tex">TEX</a>] [<a href="examples/abbildungen.pdf">PDF</a>] Abbildungen und Tabellen</li>
</ul>