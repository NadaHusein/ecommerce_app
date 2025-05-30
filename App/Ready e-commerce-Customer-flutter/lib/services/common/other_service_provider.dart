import 'package:dio/dio.dart';
import 'package:flutter_riverpod/flutter_riverpod.dart';
import 'package:ready_ecommerce/config/app_constants.dart';
import 'package:ready_ecommerce/services/base/eCommerce/others_provider_base.dart';
import 'package:ready_ecommerce/utils/api_client.dart';

class OtherServiceProvider implements OtherProviderBase {
  final Ref ref;
  OtherServiceProvider(this.ref);
  @override
  Future<Response> getPrivacyPolicy() async {
    final response =
        await ref.read(apiClientProvider).get(AppConstants.privacyPolicy);
    return response;
  }

  @override
  Future<Response> getTermsAndConditions() async {
    final response =
        ref.read(apiClientProvider).get(AppConstants.termsAndConditions);
    return response;
  }

  @override
  Future<Response> support({required String subject, required String message}) {
    final respnse =
        ref.read(apiClientProvider).post(AppConstants.support, data: {
      'subject': subject,
      'message': message,
    });
    return respnse;
  }

  @override
  Future<Response> getRefundPolicy() {
    final response = ref.read(apiClientProvider).get(AppConstants.refundPolicy);
    return response;
  }

  @override
  Future<Response> getContactUsinfo() {
    final response = ref.read(apiClientProvider).get(AppConstants.contactUs);
    return response;
  }

  @override
  Future<Response> getProfileinfo() async {
    final response = ref.read(apiClientProvider).get(AppConstants.profileinfo);
    return response;
  }
}

final otherServiceProvider = Provider((ref) => OtherServiceProvider(ref));
