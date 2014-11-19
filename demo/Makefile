all:
	latexmk -pdf arbeit
	latexmk -pdf beamer
	latexmk -pdf beamer-titlepage
	latexmk -pdf beamer-struktur
	latexmk -pdf beamer-listing
	latexmk -pdf beamer-Boadilla
	latexmk -pdf beamer-Madrid
	latexmk -pdf beamer-Rochester
	latexmk -pdf beamer-Montpellier
	latexmk -pdf beamer-Goettingen
	latexmk -pdf beamer-Frankfurt
	latexmk -pdf beamer-Luebeck
	latexmk -pdf brief
	latexmk -pdf example
	latexmk -pdf hello
	latexmk -pdf kopfzeile-standard
	latexmk -pdf kopfzeile-links
	latexmk -pdf kopfzeile-mittig
	latexmk -pdf kopfzeile-ultimativ
	latexmk -pdf theorems
	latexmk -pdf theorems-lemma
	latexmk -pdf maketitle
	latexmk -pdf titlepage
	latexmk -pdf margin

force:
	latexmk -pdf -g -f arbeit
	latexmk -pdf -g -f beamer
	latexmk -pdf -g -f beamer-titlepage
	latexmk -pdf -g -f beamer-struktur
	latexmk -pdf -g -f beamer-listing
	latexmk -pdf -g -f beamer-Boadilla
	latexmk -pdf -g -f beamer-Madrid
	latexmk -pdf -g -f beamer-Rochester
	latexmk -pdf -g -f beamer-Montpellier
	latexmk -pdf -g -f beamer-Goettingen
	latexmk -pdf -g -f beamer-Frankfurt
	latexmk -pdf -g -f beamer-Luebeck
	latexmk -pdf -g -f brief
	latexmk -pdf -g -f example
	latexmk -pdf -g -f hello
	latexmk -pdf -g -f kopfzeile-standard
	latexmk -pdf -g -f kopfzeile-links
	latexmk -pdf -g -f kopfzeile-mittig
	latexmk -pdf -g -f kopfzeile-ultimativ
	latexmk -pdf -g -f theorems
	latexmk -pdf -g -f theorems-lemma
	latexmk -pdf -g -f maketitle
	latexmk -pdf -g -f titlepage
	latexmk -pdf -g -f margin

clean:
	latexmk -pdf -c arbeit
	latexmk -pdf -c beamer
	latexmk -pdf -c beamer-titlepage
	latexmk -pdf -c beamer-struktur
	latexmk -pdf -c beamer-listing
	latexmk -pdf -c beamer-Boadilla
	latexmk -pdf -c beamer-Madrid
	latexmk -pdf -c beamer-Rochester
	latexmk -pdf -c beamer-Montpellier
	latexmk -pdf -c beamer-Goettingen
	latexmk -pdf -c beamer-Frankfurt
	latexmk -pdf -c beamer-Luebeck
	latexmk -pdf -c brief
	latexmk -pdf -c example
	latexmk -pdf -c hello
	latexmk -pdf -c kopfzeile-standard
	latexmk -pdf -c kopfzeile-links
	latexmk -pdf -c kopfzeile-mittig
	latexmk -pdf -c kopfzeile-ultimativ
	latexmk -pdf -c theorems
	latexmk -pdf -c theorems-lemma
	latexmk -pdf -c maketitle
	latexmk -pdf -c titlepage
	latexmk -pdf -c margin
	rm -f arbeit.bbl \
		beamer*.nav \
		beamer*.snm \
		beamer*.vrb

clear:
	latexmk -pdf -C arbeit
	latexmk -pdf -C beamer
	latexmk -pdf -C beamer-titlepage
	latexmk -pdf -C beamer-struktur
	latexmk -pdf -C beamer-listing
	latexmk -pdf -C beamer-Boadilla
	latexmk -pdf -C beamer-Madrid
	latexmk -pdf -C beamer-Rochester
	latexmk -pdf -C beamer-Montpellier
	latexmk -pdf -C beamer-Goettingen
	latexmk -pdf -C beamer-Frankfurt
	latexmk -pdf -C beamer-Luebeck
	latexmk -pdf -C brief
	latexmk -pdf -C example
	latexmk -pdf -C hello
	latexmk -pdf -C kopfzeile-standard
	latexmk -pdf -C kopfzeile-links
	latexmk -pdf -C kopfzeile-mittig
	latexmk -pdf -C kopfzeile-ultimativ
	latexmk -pdf -C theorems
	latexmk -pdf -C theorems-lemma
	latexmk -pdf -C maketitle
	latexmk -pdf -C titlepage
	latexmk -pdf -C margin
	rm -f arbeit.bbl \
		beamer*.nav \
		beamer*.snm \
		beamer*.vrb

.PHONY: all force clean clear