TEXINPUTS := ./inc:./content:$(TEXINPUTS)

all: script presentation

script: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex-script

presentation: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex

force-all: force-script force-presentation

force-script: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex-script

force-presentation: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex

clean: demo-clean
	latexmk -pdf -c latex
	latexmk -pdf -c latex-script
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

clear: demo-clear
	latexmk -pdf -C latex
	latexmk -pdf -C latex-script
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

demo:
	cd demo; \
	pdftex story; \
	latexmk -pdf arbeit; \
	latexmk -pdf beamer; \
	latexmk -pdf beamer-titlepage; \
	latexmk -pdf beamer-struktur; \
	latexmk -pdf beamer-listing; \
	latexmk -pdf beamer-Boadilla; \
	latexmk -pdf beamer-Madrid; \
	latexmk -pdf beamer-Rochester; \
	latexmk -pdf beamer-Montpellier; \
	latexmk -pdf beamer-Goettingen; \
	latexmk -pdf beamer-Frankfurt; \
	latexmk -pdf beamer-Luebeck; \
	latexmk -pdf brief; \
	latexmk -pdf hello; \
	latexmk -pdf kopfzeile; \
	latexmk -pdf margin

force-demo:
	cd demo; \
	pdftex story; \
	latexmk -pdf -g -f arbeit; \
	latexmk -pdf -g -f beamer; \
	latexmk -pdf -g -f beamer-titlepage; \
	latexmk -pdf -g -f beamer-struktur; \
	latexmk -pdf -g -f beamer-listing; \
	latexmk -pdf -g -f beamer-Boadilla; \
	latexmk -pdf -g -f beamer-Madrid; \
	latexmk -pdf -g -f beamer-Rochester; \
	latexmk -pdf -g -f beamer-Montpellier; \
	latexmk -pdf -g -f beamer-Goettingen; \
	latexmk -pdf -g -f beamer-Frankfurt; \
	latexmk -pdf -g -f beamer-Luebeck; \
	latexmk -pdf -g -f brief; \
	latexmk -pdf -g -f hello; \
	latexmk -pdf -g -f kopfzeile; \
	latexmk -pdf -g -f margin

demo-clean:
	cd demo; \
	latexmk -pdf -c arbeit; \
	latexmk -pdf -c beamer; \
	latexmk -pdf -c beamer-titlepage; \
	latexmk -pdf -c beamer-struktur; \
	latexmk -pdf -c beamer-listing; \
	latexmk -pdf -c beamer-Boadilla; \
	latexmk -pdf -c beamer-Madrid; \
	latexmk -pdf -c beamer-Rochester; \
	latexmk -pdf -c beamer-Montpellier; \
	latexmk -pdf -c beamer-Goettingen; \
	latexmk -pdf -c beamer-Frankfurt; \
	latexmk -pdf -c beamer-Luebeck; \
	latexmk -pdf -c brief; \
	latexmk -pdf -c hello; \
	latexmk -pdf -c kopfzeile; \
	latexmk -pdf -c margin; \
	rm -f story.log \
		arbeit.bbl \
		beamer*.nav \
		beamer*.snm \
		beamer*.vrb

demo-clear:
	cd demo; \
	latexmk -pdf -C arbeit; \
	latexmk -pdf -C beamer; \
	latexmk -pdf -C beamer-titlepage; \
	latexmk -pdf -C beamer-struktur; \
	latexmk -pdf -C beamer-listing; \
	latexmk -pdf -C beamer-Boadilla; \
	latexmk -pdf -C beamer-Madrid; \
	latexmk -pdf -C beamer-Rochester; \
	latexmk -pdf -C beamer-Montpellier; \
	latexmk -pdf -C beamer-Goettingen; \
	latexmk -pdf -C beamer-Frankfurt; \
	latexmk -pdf -C beamer-Luebeck; \
	latexmk -pdf -C brief; \
	latexmk -pdf -C hello; \
	latexmk -pdf -C kopfzeile; \
	latexmk -pdf -C margin; \
	rm -f story.log \
		story.pdf \
		arbeit.bbl \
		beamer*.nav \
		beamer*.snm \
		beamer*.vrb


.PHONY: clean clear demo force-demo demo-clean demo-clear
