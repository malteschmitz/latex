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
	cd demo; make

force-demo:
	cd demo; make force

demo-clean:
	cd demo; make clean

demo-clear:
	cd demo; make clear


.PHONY: clean clear demo force-demo demo-clean demo-clear
