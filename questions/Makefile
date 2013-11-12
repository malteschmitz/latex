all:
	latexmk -pdf frankfurt
	
force:
	latexmk -pdf -g -f frankfurt

clean:
	latexmk -pdf -c frankfurt
	rm -f *.nav *.snm *.vrb

clear:
	latexmk -pdf -C frankfurt
	rm -f *.nav *.snm *.vrb

.PHONY: all force clean clear