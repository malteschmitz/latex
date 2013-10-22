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
	latexmk -pdf -g -f brief; \
	latexmk -pdf -g -f hello; \
	latexmk -pdf -g -f kopfzeile; \
	latexmk -pdf -g -f margin

demo-clean:
	cd demo; \
	latexmk -pdf -c arbeit; \
	latexmk -pdf -c beamer; \
	latexmk -pdf -c beamer-titlepage; \
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


.PHONY: clean

.PHONY: clear

.PHONY: demo

.PHONY: force-demo

.PHONY: demo-clean

.PHONY: demo-clear
