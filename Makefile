TEXINPUTS := ./inc:./content:$(TEXINPUTS)

all: script presentation
all-slides: slides-basics slides-tikz

script: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex-script

presentation: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex

slides-basics: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf slides-basics

slides-tikz: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf slides-tikz

force-all: force-script force-presentation
force-all-slides: force-basics force-tikz

force-script: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex-script

force-presentation: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex

force-basics: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f slides-basics

force-tikz: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f slides-tikz

clean: demo-clean
	latexmk -pdf -c latex
	latexmk -pdf -c latex-script
	latexmk -pdf -c slides-basics
	latexmk -pdf -c slides-tikz
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
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

clear: demo-clear
	latexmk -pdf -C latex
	latexmk -pdf -C latex-script
	latexmk -pdf -C slides-basics
	latexmk -pdf -C slides-tikz
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
