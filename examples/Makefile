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
	rm -f beamer*.nav \
		beamer*.snm \
		beamer*.vrb \
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

	rm -f beamer*.nav \
		beamer*.snm \
		beamer*.vrb \
		literatur.bbl

.PHONY: all force clean clear