<?php

// Autolink
if ( ! function_exists( 'auto_link' ) )
{
	function refinery_auto_link( $str, $type = 'both', $popup = FALSE )
	{
		if ( $type != 'email' )
		{
			if ( preg_match_all( "#(^|\s|\()((http(s?)://)|(www\.))(\w+[^\s\)\<]+)#i", $str, $matches ) )
			{
				$pop = " target=\"_blank\" ";

				for ( $i = 0; $i < count( $matches['0'] ); $i++ )
				{
					$period = '';
					if ( preg_match( "|\.$|", $matches['6'][$i] ) )
					{
						$period = '.';
						$matches['6'][$i] = substr( $matches['6'][$i], 0, -1 );
					}

					$str = str_replace(
					    $matches['0'][$i],
    					$matches['1'][$i].'<a href="http'.
    					$matches['4'][$i].'://'.
    					$matches['5'][$i].
    					$matches['6'][$i].'"'.$pop.'>http'.
    					$matches['4'][$i].'://'.
    					$matches['5'][$i].
    					$matches['6'][$i].'</a>'.
    					$period, $str
    				);
				}
			}
		}

		if ( $type != 'url' )
		{
			if ( preg_match_all( "/([a-zA-Z0-9_\.\-\+]+)@([a-zA-Z0-9\-]+)\.([a-zA-Z0-9\-\.]*)/i", $str, $matches ) )
			{
				for ( $i = 0; $i < count( $matches['0'] ); $i++ )
				{
					$period = '';
					if ( preg_match( "|\.$|", $matches['3'][$i] ) )
					{
						$period = '.';
						$matches['3'][$i] = substr( $matches['3'][$i], 0, -1 );
					}

					$str = str_replace( $matches['0'][$i], $matches['1'][$i].'@'.$matches['2'][$i].'.'.$matches['3'][$i].$period, $str );
				}
			}
		}

		return $str;
	}
}
add_action( 'the_content', 'refinery_auto_link' );
add_action( 'the_excerpt', 'refinery_auto_link' );