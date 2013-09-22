rerun = "(There were undefined references|Rerun to get (cross-references|the bars) right)"
latex = pdflatex
doc = latex
TEXINPUTS := ./inc:./content:$(TEXINPUTS)

all: $(doc).pdf

dist: FORCE $(doc).pdf $(doc)-script.pdf

$(doc).pdf: $(doc).tex inc/*.tex inc/*.sty content/*.tex images/*.tex
	TEXINPUTS="$(TEXINPUTS)" $(latex) $(doc).tex
	(egrep -q $(rerun) $(doc).log && TEXINPUTS="$(TEXINPUTS)" $(latex) $(doc).tex) || true
	(egrep -q $(rerun) $(doc).log && TEXINPUTS="$(TEXINPUTS)" $(latex) $(doc).tex) || true
	
$(doc)-script.pdf: $(doc)-script.tex inc/*.tex inc/*.sty content/*.tex images/*.tex
	TEXINPUTS="$(TEXINPUTS)" $(latex) $(doc)-script.tex
	(egrep -q $(rerun) $(doc)-script.log && TEXINPUTS="$(TEXINPUTS)" $(latex) $(doc)-script.tex) || true
	(egrep -q $(rerun) $(doc)-script.log && TEXINPUTS="$(TEXINPUTS)" $(latex) $(doc)-script.tex) || true

clean:
	rm -f \
		$(doc).log \
		$(doc).out \
		$(doc).nav \
		$(doc).aux \
		$(doc).snm \
		$(doc).toc \
		$(doc).vrb \
		$(doc)-script.log \
		$(doc)-script.out \
		$(doc)-script.nav \
		$(doc)-script.aux \
		$(doc)-script.snm \
		$(doc)-script.toc \
		$(doc)-script.vrb

FORCE:
