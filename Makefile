TEXINPUTS := ./inc:./content:$(TEXINPUTS)

all: script presentation
all-slides: slides-basics slides-tikz slides-beamer

script: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex-script

presentation: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex

slides-basics: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf slides-basics

slides-tikz: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf slides-tikz

slides-beamer: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf slides-beamer

force-all: force-script force-presentation
force-all-slides: force-basics force-tikz force-beamer

force-script: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex-script

force-presentation: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex

force-basics: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f slides-basics

force-tikz: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f slides-tikz

force-beamer: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f slides-beamer

clean: demo-clean
	latexmk -pdf -c latex
	latexmk -pdf -c latex-script
	latexmk -pdf -c slides-basics
	latexmk -pdf -c slides-tikz
	latexmk -pdf -c slides-beamer
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		slides-basics.nav \
		slides-basics.snm \
		slides-basics.vrb \
		slides-tikz.nav \
		slides-tikz.snm \
		slides-tikz.vrb \
		slides-beamer.nav \
		slides-beamer.snm \
		slides-beamer.vrb \
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

clear: demo-clear
	latexmk -pdf -C latex
	latexmk -pdf -C latex-script
	latexmk -pdf -C slides-basics
	latexmk -pdf -C slides-tikz
	latexmk -pdf -C slides-beamer
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		slides-basics.nav \
		slides-basics.snm \
		slides-basics.vrb \
		slides-tikz.nav \
		slides-tikz.snm \
		slides-tikz.vrb \
		slides-beamer.nav \
		slides-beamer.snm \
		slides-beamer.vrb \
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

demo:
	cd demo; make

force-demo:
	cd demo; make force

demo-clean:
	cd demo; make clean

demo-clear:
	cd demo; make clear


.PHONY: clean clear demo force-demo demo-clean demo-clear
