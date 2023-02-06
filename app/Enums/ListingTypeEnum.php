<?php

namespace App\Enums;

enum ListingtypeEnum : string {

	case OPEN = 'Open Listing';
	case SELL = 'Sell Listing';
	case EXCLUSIVE = 'Exclusice Agency Listing';
	case NET = 'Net Listing';
}