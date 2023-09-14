import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import checkout from "./checkout/checkout.js";
import Clipboard from "@ryangjchandler/alpine-clipboard";

Alpine.plugin(Clipboard);
Alpine.data('checkout', checkout);
Livewire.start();
