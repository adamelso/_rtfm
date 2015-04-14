<?php

namespace Rtfm\Control;

/**
 * An RTF control word is a specially formatted command used to mark characters for display on a monitor or characters
 * destined for a printer. A control word’s name cannot be longer than 32 letters.
 * A control word is defined by:
 *
 *     \<ASCII Letter Sequence><Delimiter>
 *
 * where `<Delimiter>` marks the end of the control word's name. For example:
 *
 *     \par
 *
 * A backslash begins each control word and the control word is case sensitive.
 *
 * The `<ASCII Letter Sequence>` is made up of ASCII alphabetical characters (a through z and A through Z).
 * Control words (also known as keywords) originally did not contain any uppercase characters, however in recent years
 * uppercase characters appear in some newer control words.
 */
interface Word
{
}
