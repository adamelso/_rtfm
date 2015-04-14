<?php

namespace Rtfm\Control;

/**
 * Group dictionary.
 *
 * A group can consist of text, control words, or control symbols enclosed in braces ({ }). The opening brace ({ )
 * indicates the start of the group and the closing brace ( }) indicates the end of the group. Each group specifies the
 * text affected by the group and the different attributes of that text. The RTF file can also include groups for fonts,
 * styles, screen color, pictures, footnotes, comments (annotations), headers and footers, summary information, fields,
 * bookmarks, document-, section-, paragraph- and character-formatting properties, mathematics, images, and objects.
 *
 * If the font, file, style, color, revision mark, and summary-information groups and document-formatting properties
 * are included in the file, they must appear in the RTF header, which precedes the RTF body. If the content of any
 * group is not used, the group can be omitted. The groups are discussed in the following sections. Any group that uses
 * the properties defined in another group must appear after the group that defines those properties. For example, color
 * and font properties must precede the style group.
 *
 * @author Adam Elsodaney <adam.elso@gmail.com>
 */
interface Group
{
	const RTF1 = '\rtf1';

	const ANSI = '\ansi';
	const FBIDIS = '\fbidis';
	const DEFF0 = '\deff0';
	const FONTTBL = '\fonttbl';
	const FOOTNOTE = '\footnote';
	const PARD = '\pard';
	const PLAIN = '\plain';
	const SECTD = '\sectd';
}
