# Was ist LaTeX?

_FOLIEN_ Was ist LaTeX und wann wird es eingesetzt?

# LaTeX verwenden

## Leerzeichen und Umbrüche

_REGIE_ Texte aus `blindtext.txt` in `gummibaerchen.tex` übernehmen.

- Zusätzliche Leerzeichen werden ignoriert.
- Zeilenumbrüche werden ignoriert.

### Absatz

- Absatz: leere Zeile in der Eingabe
- Aussehen variiert je nach Einstellungen.

### Manueller Zeilenumbruch

- Zeilenumbruch: `\\`
- Ist hässlich und stört den Lesefluss.

## Auszeichnungen

```
Freilebende \textbf{Gummibärchen} \emph{gibt es nicht}.

Man kauft sie in \textsc{Packungen}.

Nun sind \textcolor{orange}{Gummibärchen} weder wabbelig noch zäh.
```

### Zentrieren, Zitieren und Fußnoten

```
Und wie man damit umgeht: \enquote{Mensch erkenne dich selbst!}

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
\end{quote}
```

## Befehle und Umgebungen

_FOLIEN_ Zusammenfassung der Syntax von Befehlen und Umgebungen.

## Abschnitte

_REGIE_ Mehr Texte aus blindtext.txt übernehmen.

```
\chapter{Gummibärchen}

\section{Forscherdrang}

\subsection{Der Blindtext-Fall}

\section{Weit hinter den Wortbergen}
```

## Mathematik

_REGIE_ Text aus pythagoras.txt übernehmen.

Inline:

```
Es gilt $a^2 + b^2 = c^2$.
```

Abgesetzt:

```
Darüber hinaus gilt $\alpha^{22} + \beta_{12} = \gamma^2_a$.
Anschließend wenden wir
\[ \sum^n_{i=1}i = \frac{n(n+1)}2 \]
an, was auch als Summenformel bekannt ist.
```

Mehrere Zeilen gemeinsam ausgerichtet:

```
Es gilt
\begin{align*}
  \sqrt{x^4} &= x^2\\
  \lim_{n\to\infty} \frac 1{n^2} &= 0 \\
  \int_{-1}^2 x\, \mathrm{d}x &= \left[ \frac12 x^2 \right]_1^2
\end{align*}
```

## Abbildungen

Die eigentliche Grafik:

```
\includegraphics[width=6cm]{flower}
```

Fließumgebungen werden frei im Text positioniert:

```
\begin{figure}
  \centering
  \includegraphics[width=6cm]{flower}
  \caption{Ein Beispiel.}
  \label{fig:flower}
\end{figure}
```

Über das Label kann die Abbildung referenziert werden:

```
Der AD aus MG nimmt diesen Blindtext aus \autoref{fig:flower} als Filet.
```

## Thesis Template

_REGIE_ In `thesis.tex` die erste `document`-Umgebung löschen.

# Zusammenfassung

_FOLIEN_ Zusammenfassung.
