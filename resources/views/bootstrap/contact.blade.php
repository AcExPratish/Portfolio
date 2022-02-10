@extends('layouts.bootstrap')
@section('content')
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Our Contact Info</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">{{__('Address:')}}</td>
                                    <td>
                                        {{__('XXX-XXX-XXX')}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="c-o">{{__('Phone:')}}</td>
                                    <td>{{__('(XXX) XXX-XXXXXXX')}}</td>
                                </tr>
                                <tr>
                                    <td class="c-o">{{__('Email:')}}</td>
                                    <td>{{__('abc@xyz.com')}}</td>
                                </tr>
                                <tr>
                                    <td class="c-o">{{__('Fax:')}}</td>
                                    <td>{{__('(XXX) XXX-XXXXXXX')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" method="#" enctype="multipart/form-data" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Name" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Your Email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea placeholder="Your Message" name="message" class="form-control"></textarea>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <input type="submit" class="btn-grad text-white" value="Submit Now">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3537.271615358195!2d85.29543245033945!3d27.554079638734073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb15e42d8d7d43%3A0x5126f944d6a28566!2sKotdada%20Valley%20View%20restaurant!5e0!3m2!1sen!2snp!4v1641188366186!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
@endsection
