TEXINPUTS := ./inc:./content:$(TEXINPUTS)

all: script presentation
all-slides: slides-basics

script: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex-script

presentation: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf latex

slides-basics: demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf slides-basics

force-all: force-script force-presentation
force-all-slides: force-basics

force-script: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex-script

force-presentation: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f latex

force-basics: force-demo
	TEXINPUTS="$(TEXINPUTS)" latexmk -pdf -g -f slides-basics

clean: demo-clean
	latexmk -pdf -c latex
	latexmk -pdf -c latex-script
	latexmk -pdf -c slides-basics
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		slides-basics.nav \
		slides-basics.snm \
		slides-basics.vrb \
		latex-script.bbl \
		latex-script.maf \
		latex-script.mtc*

clear: demo-clear
	latexmk -pdf -C latex
	latexmk -pdf -C latex-script
	latexmk -pdf -C slides-basics
	rm -f \
		latex.nav \
		latex.snm \
		latex.vrb \
		slides-basics.nav \
		slides-basics.snm \
		slides-basics.vrb \
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
