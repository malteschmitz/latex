% LaTeX class for easier demonstration
% Malte Schmitz - October 2015

\NeedsTeXFormat{LaTeX2e}
\ProvidesClass{easyarticle}

% load the KOMA-Script article class
\LoadClass{scrartcl}

% input encoding
\RequirePackage[utf8]{inputenc}

% new german spelling
\RequirePackage[ngerman]{babel}

% choose font
\RequirePackage[T1]{fontenc}
\RequirePackage{lmodern}

% KOMA-Script options
\KOMAoptions{%
  parskip=full,%
  fontsize=12pt}

% color and images
\RequirePackage{xcolor}
\RequirePackage{graphicx}

% quotes
\RequirePackage[german=guillemets]{csquotes}

% math
\RequirePackage{amsmath}

% set special behaviour for hyperlinks in pdfs
\RequirePackage[breaklinks=true]{hyperref}

