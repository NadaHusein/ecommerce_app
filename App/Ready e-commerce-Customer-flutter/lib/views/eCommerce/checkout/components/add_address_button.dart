// ignore_for_file: public_member_api_docs, sort_constructors_first
import 'package:dotted_border/dotted_border.dart';
import 'package:flutter/material.dart';
import 'package:flutter_screenutil/flutter_screenutil.dart';
import 'package:gap/gap.dart';
import 'package:ready_ecommerce/config/app_color.dart';
import 'package:ready_ecommerce/config/app_text_style.dart';
import 'package:ready_ecommerce/config/theme.dart';

class AddAddressButton extends StatelessWidget {
  final void Function() onTap;
  const AddAddressButton({
    super.key,
    required this.onTap,
  });

  @override
  Widget build(BuildContext context) {
    return Material(
      color: colors(context).primaryColor!.withOpacity(0.2),
      borderRadius: BorderRadius.circular(30.r),
      child: InkWell(
        borderRadius: BorderRadius.circular(30.r),
        onTap: onTap,
        child: DottedBorder(
          color: EcommerceAppColor.primary,
          dashPattern: const [5, 4],
          borderType: BorderType.RRect,
          radius: Radius.circular(30.r),
          strokeWidth: 2,
          child: Container(
            width: double.infinity,
            padding: EdgeInsets.symmetric(vertical: 10.h),
            decoration: ShapeDecoration(
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(30.r),
              ),
            ),
            child: Row(
              mainAxisAlignment: MainAxisAlignment.center,
              children: [
                Text(
                  'Add Address',
                  style: AppTextStyle(context).bodyText.copyWith(
                      fontWeight: FontWeight.w500,
                      color: EcommerceAppColor.primary),
                ),
                Gap(10.w),
                Icon(
                  Icons.add,
                  color: EcommerceAppColor.primary,
                )
              ],
            ),
          ),
        ),
      ),
    );
  }
}
