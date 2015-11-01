all:
	latexmk -pdf arbeit
	latexmk -pdf thesis-titlepage
	latexmk -pdf kopfzeile-standard
	latexmk -pdf kopfzeile-links
	latexmk -pdf kopfzeile-mittig

clean:
	latexmk -pdf -c arbeit
	rm -f arbeit.bbl
	latexmk -pdf -c thesis-titlepage
	latexmk -pdf -c kopfzeile-standard
	latexmk -pdf -c kopfzeile-links
	latexmk -pdf -c kopfzeile-mittig

.PHONY: all clean