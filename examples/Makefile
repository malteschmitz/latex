all:
	latexmk -pdf dokument
	latexmk -pdf mathematik
	latexmk -pdf struktur
	latexmk -pdf abbildungen
	latexmk -pdf sonderzeichen
	latexmk -pdf farbe
	latexmk -pdf befehle
	latexmk -pdf quelltext
	latexmk -pdf literatur
	latexmk -pdf kopfzeile-default
	latexmk -pdf kopfzeile-links
	latexmk -pdf kopfzeile-mittig
	latexmk -pdf kopfzeile-ultimativ
	latexmk -pdf beamer
	latexmk -pdf overlays
	latexmk -pdf sandhaufen.article
	latexmk -pdf sandhaufen.beamer
	latexmk -pdf pfade
	latexmk -pdf knoten
	latexmk -pdf automaten
	latexmk -pdf baum
	latexmk -pdf funktionen
	latexmk -pdf tikz-overlays

force:
	latexmk -pdf -g -f dokument
	latexmk -pdf -g -f mathematik
	latexmk -pdf -g -f struktur
	latexmk -pdf -g -f abbildungen
	latexmk -pdf -g -f sonderzeichen
	latexmk -pdf -g -f farbe
	latexmk -pdf -g -f befehle
	latexmk -pdf -g -f quelltext
	latexmk -pdf -g -f literatur
	latexmk -pdf -g -f kopfzeile-default
	latexmk -pdf -g -f kopfzeile-links
	latexmk -pdf -g -f kopfzeile-mittig
	latexmk -pdf -g -f kopfzeile-ultimativ
	latexmk -pdf -g -f beamer
	latexmk -pdf -g -f overlays
	latexmk -pdf -g -f sandhaufen.article
	latexmk -pdf -g -f sandhaufen.beamer
	latexmk -pdf -g -f pfade
	latexmk -pdf -g -f knoten
	latexmk -pdf -g -f automaten
	latexmk -pdf -g -f baum
	latexmk -pdf -g -f funktionen
	latexmk -pdf -g -f tikz-overlays

clean:
	latexmk -pdf -c dokument
	latexmk -pdf -c mathematik
	latexmk -pdf -c struktur
	latexmk -pdf -c abbildungen
	latexmk -pdf -c sonderzeichen
	latexmk -pdf -c farbe
	latexmk -pdf -c befehle
	latexmk -pdf -c quelltext
	latexmk -pdf -c literatur
	latexmk -pdf -c kopfzeile-default
	latexmk -pdf -c kopfzeile-links
	latexmk -pdf -c kopfzeile-mittig
	latexmk -pdf -c kopfzeile-ultimativ
	latexmk -pdf -c beamer
	latexmk -pdf -c overlays
	latexmk -pdf -c sandhaufen.article
	latexmk -pdf -c sandhaufen.beamer
	latexmk -pdf -c pfade
	latexmk -pdf -c knoten
	latexmk -pdf -c automaten
	latexmk -pdf -c baum
	latexmk -pdf -c funktionen
	latexmk -pdf -c tikz-overlays
	rm -f *.nav *.snm *.vrb \
		literatur.bbl

clear:
	latexmk -pdf -C dokument
	latexmk -pdf -C mathematik
	latexmk -pdf -C struktur
	latexmk -pdf -C abbildungen
	latexmk -pdf -C sonderzeichen
	latexmk -pdf -C farbe
	latexmk -pdf -C befehle
	latexmk -pdf -C quelltext
	latexmk -pdf -C literatur
	latexmk -pdf -C kopfzeile-default
	latexmk -pdf -C kopfzeile-links
	latexmk -pdf -C kopfzeile-mittig
	latexmk -pdf -C kopfzeile-ultimativ
	latexmk -pdf -C beamer
	latexmk -pdf -C overlays
	latexmk -pdf -C sandhaufen.article
	latexmk -pdf -C sandhaufen.beamer
	latexmk -pdf -C pfade
	latexmk -pdf -C knoten
	latexmk -pdf -C automaten
	latexmk -pdf -C baum
	latexmk -pdf -C funktionen
	latexmk -pdf -C tikz-overlays
	rm -f *.nav *.snm *.vrb \
		literatur.bbl

.PHONY: all force clean clear