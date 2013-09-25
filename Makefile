TEXINPUTS := ./inc:./content:$(TEXINPUTS)

all: script presentation

script:
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex-script

presentation:
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex

force-all: force-script force-presentation

force-script:
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex-script

force-presentation:
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex

rm-extra-files:
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

clean: rm-extra-files
	latexmk -pdf -c latex
	latexmk -pdf -c latex-script

clear: rm-extra-files
	latexmk -pdf -C latex
	latexmk -pdf -C latex-script


.PHONY: clean

.PHONY: clear

.PHONY: rm-extra-files
