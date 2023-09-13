import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import checkout from "./checkout/checkout.js";

Alpine.data('checkout', checkout);
Livewire.start();
